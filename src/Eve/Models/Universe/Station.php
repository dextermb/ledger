<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Station extends Model
{
	use GetSystem;

	/** @var string $name */
	public $name;

	/** @var int $owner */
	public $owner;

	/** @var int $type_id */
	public $type_id;

	/** @var int $race_id */
	public $race_id;

	/** @var array $position */
	public $position;

	/** @var int $reprocessing_efficiency */
	public $reprocessing_efficiency;

	/** @var int $reprocessing_stations_take */
	public $reprocessing_stations_take;

	/** @var int $max_dockable_ship_volume */
	public $max_dockable_ship_volume;

	/** @var int $office_rental_cost */
	public $office_rental_cost;

	/** @var array $services */
	public $services;

	public function map()
	{
		return [
			'station_id' => Model\Map::set('id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function type()
	{
		return (new \Eve\Collections\Universe\Type)
			->getItem($this->type_id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function rate()
	{
		return (new \Eve\Collections\Universe\Race)
			->getItems()->where('id', $this->race_id)[0];
	}
}