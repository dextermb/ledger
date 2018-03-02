<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Station extends Model
{
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

	/** @var int $system_id */
	public $system_id;

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
}