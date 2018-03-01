<?php
namespace Eve\Abstracts;

use Eve\Abstracts\Model\Map;

class Model implements \Eve\Interfaces\Model
{
	/** @var int $id */
	public $id;

	/** @var string $base_uri */
	public $base_uri;

	/** @var array $_attributes */
	private $_attributes = [];

	/**
	 * Get attribute
	 *
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
	 * Set raw attributes
	 *
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
}