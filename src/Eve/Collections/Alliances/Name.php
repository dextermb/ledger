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
	protected $base_uri = '/character/names';
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
			->setEndpoint($this->base_uri . '?alliance_ids=' . implode(',', $ids))
			->run();
	}

	/**
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return Model
	 */
	public function getItem(int $id)
	{
		return $this->getItems([ $id ])[0];
	}
}