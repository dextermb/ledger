<?php
namespace Eve\Abstracts;

use Eve\Helpers\Request;
use Eve\Helpers\ModelGroup;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

class Collection implements \Eve\Interfaces\Collection
{
	protected $base_uri;
	protected $model;
	protected $mass_transform = true;

	/**
	 * Get item IDs
	 *
	 * @return array
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 */
	public function getIds()
	{
		$this->validate(false);

		return (new Request)
			->setEndpoint($this->base_uri)
			->run();
	}

	/**
	 * Get item details for given IDs
	 *
	 * @param int[] $ids
	 * @param int   $offset
	 * @param int   $limit
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return ModelGroup
	 */
	public function getItems(array $ids = [], int $offset = 0, int $limit = 50)
	{
		$transform = count($ids) > 1 ? $this->mass_transform : true;
		$this->validate($transform);

		if (empty($ids)) {
			$ids = $this->getIds();
		}

		$output = [];
		$request = new Request;

		foreach ($ids as $key => $id) {
			if ($key < $offset) {
				continue;
			}

			$request->setEndpoint($this->base_uri . "/{$id}");

			if ($transform) {
				$request->setModel($this->model);
			}

			$output[] = $request->run();

			if ($limit > 0 && $key === $limit) {
				break;
			}
		}

		return new ModelGroup($output);
	}

	/**
	 * Get item details for an IDs
	 *
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function getItem(int $id)
	{
		return $this->getItems([ $id ])->all()[0];
	}

	/**
	 * @param bool $validate_model
	 * @throws ModelException
	 */
	final protected function validate(bool $validate_model = true)
	{
		if (!is_string($this->base_uri)) {
			throw new ModelException;
		}

		if ($validate_model && !is_string($this->model)) {
			throw new ModelException;
		}
	}
}