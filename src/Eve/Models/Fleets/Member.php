<?php
namespace Eve\Models\Fleets;

use Eve\Abstracts\Model;

final class Member extends Model
{
	/** @var int $character_id */
	public $character_id;

	/** @var int $ship_type_id */
	public $ship_type_id;

	/** @var int $wing_id */
	public $wing_id;

	/** @var int $squad_id */
	public $squad_id;

	/** @var string $role */
	public $role;

	/** @var string $role_name */
	public $role_name;

	/** @var string $join_time */
	public $join_time;

	/** @var bool $takes_fleet_wrap */
	public $takes_fleet_wrap;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $station_id */
	public $station_id;
}