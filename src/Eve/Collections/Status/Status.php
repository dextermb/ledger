<?php
namespace Eve\Collections\Status;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Exceptions\NotImplementedException;

final class Status extends Collection
{
	protected $base_uri = '/status';
	protected $model    = \Eve\Models\Status\Status::class;

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
	public function getItem(int $id = null)
	{
		return (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri)
			->run();
	}
}