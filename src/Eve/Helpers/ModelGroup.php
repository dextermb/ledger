<?php
namespace Eve\Helpers;

use Eve\Abstracts\Model;

final class ModelGroup implements \ArrayAccess
{
	/** @var Model[] $models */
	protected $models;

	public function __construct(array $models = [])
	{
		$this->models = $models;
	}

	/**
	 * @return Model[]
	 */
	public function all()
	{
		return $this->models;
	}

	/**
	 * @param string|array $key
	 * @param mixed        $value
	 * @return ModelGroup
	 */
	public function where($key, $value = null)
	{
		$filtered = array_values(
			array_filter($this->models, function ($model) use ($key, $value) {
				if (!is_array($key)) {
					return $model->{$key} == $value;
				}

				$bool = false;

				foreach ($key as $k => $v) {
					$bool = $model->{$k} == $v;
				}

				return $bool;
			})
		);

		return new self($filtered);
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 */
	public function offsetSet($offset, $value)
	{
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists($offset)
	{
		return false;
	}

	/**
	 * @param mixed $offset
	 */
	public function offsetUnset($offset)
	{
		unset($this->models[ $offset ]);
	}

	/**
	 * @param mixed $offset
	 * @return Model|null
	 */
	public function offsetGet($offset)
	{
		return isset($this->models[ $offset ]) ? $this->models[ $offset ] : null;
	}
}