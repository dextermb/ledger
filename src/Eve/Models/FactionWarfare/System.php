<?php
namespace Eve\Models\FactionWarfare;

use Eve\Abstracts\Model;

final class System extends Model
{
	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $owner_faction_id */
	public $owner_faction_id;

	/** @var int $occupier_faction_id */
	public $occupier_faction_id;

	/** @var int $victory_points */
	public $victory_points;

	/** @var int $victory_points_threshold */
	public $victory_points_threshold;

	/** @var bool $contested */
	public $contested;
}