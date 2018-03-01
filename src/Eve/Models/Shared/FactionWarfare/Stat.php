<?php
namespace Eve\Models\Shared\FactionWarfare;

use Eve\Abstracts\Model;

class Stat extends Model
{
	/** @var int $faction_id */
	public $faction_id;

	/** @var string $enlisted_on */
	public $enlisted_on;

	/** @var array $kills */
	public $kills;

	/** @var array $victory_points */
	public $victory_points;
}