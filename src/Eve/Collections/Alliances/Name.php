<?php
namespace Eve\Collections\Alliances;

use Eve\Helpers\Request;

use Eve\Abstracts\Collection;
use Eve\Helpers\ModelGroup;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
use Eve\Exceptions\NotImplementedException;

final class Name extends Collection
{
	protected $base_uri = '/alliances/names';
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
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return ModelGroup
	 */
	public function getItems(array $ids = [])
	{
		$output = (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri . '?alliance_ids=' . implode(',', $ids))
			->run();

		return new ModelGroup($output);
	}

	/**
	 * @param int $id
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function getItem(int $id)
	{
		return $this->getItems([ $id ])->all()[0];
	}
}