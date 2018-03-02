<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetCorporation;

final class Faction extends Model
{
	use GetCorporation;

	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $militia_corporation_id */
	public $militia_corporation_id;

	/** @var int $size_factor */
	public $size_factor;

	/** @var int $station_count */
	public $station_count;

	/** @var int $station_system_count */
	public $station_system_count;

	/** @var bool $is_unique */
	public $is_unique;

	public function map()
	{
		return [
			'faction_id' => Model\Map::set('id'),
		];
	}
}