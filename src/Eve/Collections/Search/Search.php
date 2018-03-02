<?php
namespace Eve\Collections\Search;

use Eve\Helpers\Request;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\NotImplementedException;

final class Search
{
	protected $base_uri = '/search';
	protected $model    = \Eve\Models\Search\Search::class;

	/**
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getIds()
	{
		throw new NotImplementedException;
	}

	/**
	 * @param       $search
	 * @param array $categories
	 * @throws ApiException|JsonException
	 * @return Model
	 */
	public function getItems(string $search, array $categories)
	{
		return (new Request)
			->setModel($this->model)
			->setEndpoint($this->base_uri . '?search=' . $search . '&categories=' . implode(',', $categories))
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