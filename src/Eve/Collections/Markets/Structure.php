<?php
namespace Eve\Collections\Markets;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NotImplementedException;

final class Structure extends Collection
{
	protected $base_uri = '/markets/structures';
	protected $model    = \Eve\Models\Markets\Structure::class;

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
	 * @return void
	 * @throws NotImplementedException
	 */
	public function getItems(array $ids = [], int $offset = 0, int $limit = 50)
	{
		throw new NotImplementedException;
	}

	/**
	 * @param int $id
	 * @throws ApiException|JsonException
	 * @return Model
	 */
	public function getItem(int $id)
	{
		return (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri . "/{$id}")
			->run();
	}
}