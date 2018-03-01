<?php
namespace Eve\Collections\Alliances;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NotImplementedException;

final class Name extends Collection
{
	protected $base_url = '/character/names';
	protected $model    = \Eve\Models\Alliances\Name::class;

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
	 * @return Model[]
	 */
	public function getItems(array $ids = [])
	{
		return (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_url . '?alliance_ids=' . implode(',', $ids))
			->run();
	}

	/**
	 * @param int $id
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getItem(int $id)
	{
		throw new NotImplementedException;
	}
}