<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Location extends Model
{
	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $station_id */
	public $station_id;

	/** @var int $structure_id */
	public $structure_id;
}