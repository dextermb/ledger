<?php
namespace Eve\Abstracts;

use Eve\Abstracts\Model\Map;

class Model implements \Eve\Interfaces\Model, \ArrayAccess
{
	/** @var int $id */
	public $id;

	/** @var string $base_uri */
	public $base_uri;

	/** @var array $_attributes */
	private $_attributes = [];

	/**
	 * @param int $id
	 */
	public function __construct(int $id = null)
	{
		$this->id = $id;
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
	 */
	public function setAttributes(array $attributes)
	{
		$this->_attributes = $attributes;
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