<?php
namespace Eve\Helpers;

use Eve\Eve;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Models\Character\Character;

final class Request
{
	const BASE_URI        = 'https://esi.tech.ccp.is/latest';
	const BASE_OPTIONS    = '?datasorce=tranquility&language=en-us';
	const MODEL_NAMESPACE = 'Eve\Models\\';

	const MAX_RETRIES = 3;

	const DEFAULT_HEADERS
		= [
			'accept' => 'Accept: application/json',
		];

	const DEFAULT_CURLOPTS
		= [
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTPHEADER     => self::DEFAULT_HEADERS,
		];

	/** @var int $id */
	protected $id;

	/** @var Character $character */
	protected $character;

	/** @var string $model */
	protected $model;

	/** @var string $endpoint */
	protected $endpoint;

	/** @var array $curl_opts */
	protected $curl_opts = [];

	/** @var array $headers */
	protected $headers = [];

	/** @var string $data */
	protected $data;

	/** @var string $raw_response */
	protected $raw_response;

	/** @var array $response */
	protected $response;

	/** @var bool $use_session */
	protected $use_session;

	/** @var bool $expect_json */
	protected $expect_json = true;

	/**
	 * @param bool $use_session
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 */
	public function __construct(bool $use_session = true)
	{
		$this->use_session = $use_session;

		if ($use_session) {
			$session = Session::init();

			if (isset($session->access_token)) {
				Eve::init()->refreshIfExpired();

				$this->headers['authorization'] = 'Authorization: Bearer ' . $session->access_token;
			}
		}
	}

	/**
	 * @param int $id
	 * @return $this
	 */
	public function setId(int $id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * @param string $model
	 * @return $this
	 */
	public function setModel(string $model)
	{
		$this->model = $model;

		return $this;
	}

	/**
	 * @param string $endpoint
	 * @return $this
	 */
	public function setEndpoint(string $endpoint)
	{
		$this->endpoint = !endsWith($endpoint, '/') && strpos($endpoint, '?') === false
			? $endpoint . '/'
			: $endpoint;

		$this->endpoint = preg_replace('/\s+/', '%20', $this->endpoint);

		return $this;
	}

	/**
	 * @param array $curl_opts
	 * @return $this
	 */
	public function setCurlOpts(array $curl_opts)
	{
		$this->curl_opts = $curl_opts;

		return $this;
	}

	/**
	 * @param int   $key
	 * @param mixed $value
	 * @return $this
	 */
	public function setCurlOpt(int $key, $value)
	{
		$this->curl_opts[ $key ] = $value;

		return $this;
	}

	/**
	 * @param array $headers
	 * @param bool  $force
	 * @return $this
	 */
	public function setHeaders(array $headers, bool $force = false)
	{
		$this->headers = $force
			? $headers
			: array_merge($this->headers, $headers);

		return $this;
	}

	/**
	 * @param string $key
	 * @param string $header
	 * @return $this
	 */
	public function setHeader(string $key, string $header)
	{
		$this->headers[ $key ] = $header;

		return $this;
	}

	/**
	 * @param array $data
	 * @return $this
	 */
	public function setData(array $data = [])
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * @param Character $character
	 * @throws ApiException|JsonException|ModelException|NoRefreshTokenException|NoAccessTokenException
	 * @return $this
	 */
	public function setCharacter(Character $character = null)
	{
		$this->character = $character;

		if (!is_null($character)) {
			if (isset($character->access_token)) {
				Eve::init()->refreshIfExpired($character);

				$this->headers['authorization'] = 'Authorization: Bearer ' . $character->access_token;
			}
		}

		return $this;
	}

	/**
	 * @param bool $expect_json
	 * @return $this
	 */
	public function setExpectJson(bool $expect_json = true)
	{
		$this->expect_json = $expect_json;

		return $this;
	}

	/**
	 * @param bool $post
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|Model[]|array
	 */
	public function run(bool $post = false)
	{
		$ch = curl_init();

		$curl_opts = $this->curl_opts + self::DEFAULT_CURLOPTS;

		$url = self::BASE_URI . $this->endpoint;
		$url .= strpos($this->endpoint, '?') !== false
			? str_replace('?', '&', self::BASE_OPTIONS)
			: self::BASE_OPTIONS;

		$curl_opts[ CURLOPT_URL ]        = $url;
		$curl_opts[ CURLOPT_HTTPHEADER ] = array_values(array_merge($this->headers, self::DEFAULT_HEADERS));

		if ($post) {
			$curl_opts[ CURLOPT_POST ]          = true;
			$curl_opts[ CURLOPT_CUSTOMREQUEST ] = 'POST';
			$curl_opts[ CURLOPT_POSTFIELDS ]    = json_encode($this->data);
		}

		curl_setopt_array($ch, $curl_opts);

		$this->raw_response = curl_exec($ch);

		$retries     = 0;
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		while ($status_code === 502) {
			if ($retries++ === self::MAX_RETRIES) {
				throw new ApiException('MAX_RETRIES');
			}

			$this->raw_response = curl_exec($ch);
		}

		if ($status_code >= 400 || $this->expect_json) {
			$this->response = json_decode($this->raw_response, true);

			if (!is_array($this->response)) {
				throw new JsonException;
			}


			if (isset($this->response['error'])) {
				throw new ApiException($this->response['error']);
			}

			if (is_string($this->model)) {
				return $this->convert();
			}

			return $this->response;
		}

		return $this->raw_response;
	}

	/**
	 * @param array  $data
	 * @param string $class
	 * @return Model|Model[]|array
	 */
	private function convert(&$data = null, string $class = null)
	{
		if (is_null($data)) {
			$data = &$this->response;
		}

		if (is_null($class)) {
			$class = $this->model;
		}

		if (!is_array($data) || !is_string($class)) {
			return $data;
		}

		$namespaced = strpos($class, self::MODEL_NAMESPACE);

		if (is_bool($namespaced) && !$namespaced) {
			$class = $class . self::MODEL_NAMESPACE;
		}

		if (!class_exists($class)) {
			return $data;
		}

		if (isset($data[0])) {

			/** @var Model[]|array $data */
			return array_map(function ($element) {
				$element['base_uri'] = $this->endpoint;

				return $this->convert($element);
			}, $data);
		} else {
			if (is_numeric($this->id)) {
				$data['id'] = $this->id;
			} else {
				if (!!preg_match('/\/([0-9]+)(?:\/)?$/', $this->endpoint, $matches)) {
					$data['id'] = $matches[1];
				}
			}

			$data['base_uri'] = preg_replace('/\/$/', '', $this->endpoint);
		}

		/** @var Model $model */
		$model = new $class($data['id']);

		if (method_exists($model, 'map')) {
			$map = $model->map();

			foreach ($map as $original => $new) {
				if (!$new->is_class) {
					if (isset($data[ $original ]) && !isset($data[ $new->key ])) {
						$data[ $new->key ] = $data[ $original ];
						unset($data[ $original ]);
						continue;
					}
				}

				$this->convert($data[ $original ], $new->key);
			}
		}

		$model
			->setAttributes($data)
			->setCharacter($this->character);

		$attributes = array_keys(get_object_vars($model));

		foreach ($attributes as $attribute) {
			if (isset($data[ $attribute ])) {
				$model->{$attribute} = $data[ $attribute ];
			}
		}

		return $model;
	}
}