<?php
namespace Eve\Collections\Character;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Helpers\ModelGroup;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Exceptions\NotImplementedException;

final class Name extends Collection
{
	protected $base_uri = '/characters/names';
	protected $model    = \Eve\Models\Character\Name::class;

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
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return ModelGroup
	 */
	public function getItems(array $ids = [])
	{
		$output = (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri . '?character_ids=' . implode(',', $ids))
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