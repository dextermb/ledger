<?php
namespace Eve\Collections\KillMails;

use Eve\Helpers\Request;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NotImplementedException;

final class KillMail
{
	protected $base_uri = '/killmails';
	protected $model    = \Eve\Models\KillMails\KillMail::class;

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
	 * @param int    $id
	 * @param string $hash
	 * @throws ApiException|JsonException
	 * @return Model
	 */
	public function getItem(int $id, string $hash)
	{
		return (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri . $id . '/' . $hash)
			->run();
	}
}