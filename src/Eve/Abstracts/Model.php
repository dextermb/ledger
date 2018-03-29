<?php
namespace Eve\Abstracts;

use Eve\Helpers\Request;
use Eve\Abstracts\Model\Map;

use Eve\Models\Character\Character;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

class Model implements \Eve\Interfaces\Model, \ArrayAccess
{
	/** @var int $id */
	public $id;

	/** @var string $base_uri */
	public $base_uri;

	/** @var array $_attributes */
	private $_attributes = [];

	/** @var Character $_character */
	protected $_character;

	/** @var Request $_request */
	protected $_request;

	/**
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 */
	public function __construct(int $id = null)
	{
		$this->id       = $id;
		$this->_request = (new Request)
			->setCharacter($this instanceof Character ? $this : $this->_character);
	}

	/**
	 * @param $key
	 * @return mixed|null
	 */
	public function __get($key)
	{
		if ($key === '_attributes') {
			return null;
		}

		if (property_exists($this, $key)) {
			return $this->{$key};
		}

		if (method_exists($this, $key)) {
			return $this->{$key}();
		}

		if (isset($this->_attributes, $key)) {
			return $this->_attributes[ $key ];
		}

		return null;
	}

	/**
	 * @param string $key
	 * @return mixed
	 */
	public function getAttribute(string $key)
	{
		if (property_exists($this, $key)) {
			return $this->{$key};
		}

		if (isset($this->_attributes, $key)) {
			return $this->_attributes[ $key ];
		}

		return null;
	}

	/**
	 * @param array $attributes
	 * @return $this
	 */
	public function setAttributes(array $attributes)
	{
		$this->_attributes = $attributes;

		return $this;
	}

	/**
	 * @param Character $character
	 * @return $this
	 */
	public function setCharacter(Character $character = null)
	{
		$this->_character = $character;

		return $this;
	}

	/**
	 * @return Map[]
	 */
	public function map()
	{
		return [];
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value)
	{
		if (!is_null($offset)) {
			if (property_exists($this, $offset)) {
				$this->{$offset} = $value;
			} else {
				$this->_attributes[ $offset ] = $value;
			}
		}
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists($offset)
	{
		return property_exists($this, $offset) || isset($this->_attributes[ $offset ]);
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		if (property_exists($this, $offset)) {
			$this->{$offset} = null;
		} else {
			unset($this->_attributes[ $offset ]);
		}
	}

	/**
	 * @param mixed $offset
	 * @return mixed|null
	 */
	public function offsetGet($offset)
	{
		if (property_exists($this, $offset)) {
			return $this->{$offset};
		} elseif (isset($this->_attributes[ $offset ])) {
			return $this->_attributes[ $offset ];
		}

		return null;
	}
}