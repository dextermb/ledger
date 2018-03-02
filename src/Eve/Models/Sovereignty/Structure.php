<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;
use Eve\Traits\GetAlliance;

final class Structure extends Model
{
	use GetAlliance;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $structure_type_id */
	public $structure_type_id;

	/** @var int $vulnerability_occupancy_level */
	public $vulnerability_occupancy_level;

	/** @var string $vulnerable_start_time */
	public $vulnerable_start_time;

	/** @var string $vulnerable_end_time */
	public $vulnerable_end_time;

	public function map()
	{
		return [
			'structure_id' => Model\Map::set('id'),
		];
	}
}