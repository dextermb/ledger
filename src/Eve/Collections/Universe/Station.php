<?php
namespace Eve\Collections\Universe;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Exceptions\NotImplementedException;

final class Station extends Collection
{
	protected $base_uri = '/universe/station';
	protected $model    = \Eve\Models\Universe\Station::class;

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
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getItems(array $ids = [], int $offset = 0, int $limit = 50)
	{
		throw new NotImplementedException;
	}

	/**
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
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