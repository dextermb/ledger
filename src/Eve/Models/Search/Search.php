<?php
namespace Eve\Models\Search;

use Eve\Abstracts\Model;
use Eve\Helpers\ModelGroup;

use Eve\Collections\Corporations\Corporation;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Search extends Model
{
	/** @var array $agent */
	public $agent;

	/** @var array $alliance */
	public $alliance;

	/** @var array $character */
	public $character;

	/** @var array $constellation */
	public $constellation;

	/** @var array $corporation */
	public $corporation;

	/** @var array $faction */
	public $faction;

	/** @var array $inventory_type */
	public $inventory_type;

	/** @var array $region */
	public $region;

	/** @var array $solar_system */
	public $solar_system;

	/** @var array $station */
	public $station;

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return ModelGroup
	 */
	public function corporations()
	{
		return (new Corporation)->getItems($this->corporation);
	}
}