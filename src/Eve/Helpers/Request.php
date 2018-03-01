<?php
namespace Eve\Helpers;

use Eve\Eve;
use Eve\Helpers\Session;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;

final class Request
{
	const BASE_URL        = 'https://esi.tech.ccp.is/latest';
	const BASE_OPTIONS    = '?datasorce=tranquility&language=en-us';
	const MODEL_NAMESPACE = 'Eve\Models\\';

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

	/** @var bool $expect_json */
	protected $expect_json = true;

	public function __construct()
	{
		$eve     = Eve::init();
		$session = Session::init();

		if (isset($session->access_token)) {
			$eve->refreshIfExpired();

			$this->headers['authorization'] = 'Authorization: Bearer ' . $session->access_token;
		}
	}

	/**
	 * Set ID
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId(int $id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Set model
	 *
	 * @param string $model
	 * @return $this
	 */
	public function setModel(string $model)
	{
		$this->model = $model;

		return $this;
	}

	/**
	 * Set endpoint
	 *
	 * @param string $endpoint
	 * @return $this
	 */
	public function setEndpoint(string $endpoint)
	{
		$this->endpoint = $endpoint;

		return $this;
	}

	/**
	 * Set many cURL options
	 *
	 * @param array $curl_opts
	 * @return $this
	 */
	public function setCurlOpts(array $curl_opts)
	{
		$this->curl_opts = $curl_opts;

		return $this;
	}

	/**
	 * Set a cURL option
	 *
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
	 * Set many request headers
	 *
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
	 * Set a request header
	 *
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
	 * Set post data
	 *
	 * @param array $data
	 * @return $this
	 */
	public function setData(array $data = [])
	{
		$this->data = $data;

		return $this;
	}

	/**
	 * Set if an endpoint should return json or not
	 *
	 * @param bool $expect_json
	 * @return $this
	 */
	public function setExpectJson(bool $expect_json = true)
	{
		$this->expect_json = $expect_json;

		return $this;
	}

	/**
	 * Send an API request to ESI
	 *
	 * @param bool $post
	 * @throws ApiException|JsonException
	 * @return Model|Model[]|array
	 */
	public function run(bool $post = false)
	{
		$ch = curl_init();

		$curl_opts = $this->curl_opts + self::DEFAULT_CURLOPTS;

		$url = self::BASE_URL . $this->endpoint;
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

		if ($this->expect_json) {
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
	 * Convert response to a model
	 *
	 * @param array  $data
	 * @param string $class
	 * @return Model|Model[]|array
	 */
	private function convert(array &$data = null, string $class = null)
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
				if (!!preg_match('/\/([0-9]+)$/', $this->endpoint, $matches)) {
					$data['id'] = $matches[1];
				}
			}

			$data['base_uri'] = $this->endpoint;
		}

		/** @var Model $model */
		$model = new $class;

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

		$attributes = array_keys(get_object_vars($model));

		foreach ($attributes as $attribute) {
			$model->{$attribute} = $data[ $attribute ];
		}

		return $model;
	}
}