<?php
namespace Eve\Collections\Corporations;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Helpers\ModelGroup;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NotImplementedException;

final class Name extends Collection
{
	protected $base_uri = '/corporations/names';
	protected $model    = \Eve\Models\Corporations\Name::class;

	/**
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getIds()
	{
		throw new NotImplementedException;
	}

	/**
	 * @param int[] $ids
	 * @throws ApiException|JsonException
	 * @return ModelGroup
	 */
	public function getItems(array $ids = [])
	{
		$output = (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri . '?corporation_ids=' . implode(',', $ids))
			->run();

		return new ModelGroup($output);
	}

	/**
	 * @param int $id
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getItem(int $id = null)
	{
		throw new NotImplementedException;
	}
}