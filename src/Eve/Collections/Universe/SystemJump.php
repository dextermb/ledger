<?php
namespace Eve\Collections\Universe;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NotImplementedException;

final class SystemJump extends Collection
{
	protected $base_uri = '/universe/system_jumps';
	protected $model    = \Eve\Models\Universe\SystemJump::class;

	/**
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getIds()
	{
		throw new NotImplementedException;
	}

	/**
	 * @param array $ids
	 * @param int   $offset
	 * @param int   $limit
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function getItems(array $ids = [], int $offset = 0, int $limit = 50)
	{
		return (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri)
			->run();
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