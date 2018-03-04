<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class Outpost extends Model
{
	use GetSystem;

	/** @var int $owner_id */
	public $owner_id;

	/** @var int $docking_cost_per_ship_volume */
	public $docking_cost_per_ship_volume;

	/** @var int $office_rental_cost */
	public $office_rental_cost;

	/** @var int $type_id */
	public $type_id;

	/** @var int $reprocessing_efficiency */
	public $reprocessing_efficiency;

	/** @var int $reprocessing_station_take */
	public $reprocessing_station_take;

	/** @var int $standing_owner_id */
	public $standing_owner_id;

	/** @var array $coordinates */
	public $coordinates;

	/** @var array $coordinates */
	public $services;
}