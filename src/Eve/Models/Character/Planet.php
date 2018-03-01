<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Planet extends Model
{
	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $owner_id */
	public $owner_id;

	/** @var int $upgrade_level */
	public $upgrade_level;

	/** @var int $num_pins */
	public $num_pins;

	/** @var string $last_update */
	public $last_update;

	/** @var string $planet_types */
	public $planet_types;

	public function map()
	{
		return [
			'planet_id' => Model\Map::set('id'),
		];
	}
}