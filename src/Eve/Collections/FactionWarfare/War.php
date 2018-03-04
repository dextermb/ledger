<?php
namespace Eve\Collections\FactionWarfare;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Helpers\ModelGroup;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Exceptions\NotImplementedException;

final class War extends Collection
{
	protected $base_uri = '/fw/wars';
	protected $model    = \Eve\Models\FactionWarfare\War::class;

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
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return ModelGroup
	 */
	public function getItems(array $ids = [], int $offset = 0, int $limit = 50)
	{
		$output = (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri)
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