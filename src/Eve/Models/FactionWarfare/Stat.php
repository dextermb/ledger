<?php
namespace Eve\Models\FactionWarfare;

use Eve\Abstracts\Model;

final class Stat extends Model
{
	/** @var int $faction_id */
	public $faction_id;

	/** @var int $pilots */
	public $pilots;

	/** @var int $systems_controlled */
	public $systems_controlled;

	/** @var array $kills */
	public $kills;

	/** @var array $victory_points */
	public $victory_points;
}