<?php
namespace Eve\Collections\Search;

use Eve\Helpers\Request;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;
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
	 * @param string $query
	 * @param array  $categories
	 * @param bool   $strict
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function getItems(string $query, array $categories, bool $strict = false)
	{
		$output = (new Request)
			->setModel($this->model)
			->setEndpoint(
				$this->base_uri
				. '?categories=' . implode(',', $categories)
				. '&search=' . $query
				. '&strict=' . var_export($strict, true)
			)
			->run();

		return $output;
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