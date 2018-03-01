<?php
namespace Eve\Abstracts;

use Eve\Helpers\Request;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

class Collection implements \Eve\Interfaces\Collection
{
	protected $base_url;
	protected $model;

	/**
	 * Get item IDs
	 *
	 * @return array
	 * @throws ApiException|JsonException|ModelException
	 */
	public function getIds()
	{
		$this->validate(false);

		return (new Request)
			->setEndpoint($this->base_url)
			->run();
	}

	/**
	 * Get item details for given IDs
	 *
	 * @param int[] $ids
	 * @throws ApiException|JsonException|ModelException
	 * @return Model[]
	 */
	public function getItems(array $ids = [])
	{
		$this->validate();

		if (empty($ids)) {
			$ids = $this->getIds();
		}

		$output = [];

		foreach ($ids as $id) {
			$output[] = (new Request)
				->setModel($this->model)
				->setEndpoint($this->base_url . "/{$id}")
				->run();
		}

		return $output;
	}

	/**
	 * Get item details for an IDs
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function getItem(int $id)
	{
		return $this->getItems([ $id ])[0];
	}

	/**
	 * @param bool $validate_model
	 * @throws ModelException
	 */
	final protected function validate(bool $validate_model = true)
	{
		if (!is_string($this->base_url)) {
			throw new ModelException;
		}

		if ($validate_model && !is_string($this->model)) {
			throw new ModelException;
		}
	}
}