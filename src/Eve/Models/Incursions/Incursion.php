<?php
namespace Eve\Models\Incursions;

use Eve\Abstracts\Model;
use Eve\Traits\GetFaction;

final class Incursion extends Model
{
	use GetFaction;

	/** @var string $type */
	public $type;

	/** @var string $state */
	public $state;

	/** @var int $influence */
	public $influence;

	/** @var bool $has_boss */
	public $has_boss;

	/** @var int $constellation_id */
	public $constellation_id;

	/** @var int $staging_solar_system_id */
	public $staging_solar_system_id;

	/** @var array $infested_solar_systems */
	public $infested_solar_systems;
}