<?php
namespace Eve\Models\Character\FactionWarfare;

use Eve\Abstracts\Model;

final class Stat extends Model
{
	/** @var int $faction_id */
	public $faction_id;

	/** @var string $enlisted_on */
	public $enlisted_on;

	/** @var int $current_rank */
	public $current_rank;

	/** @var int $highest_rank */
	public $highest_rank;

	/** @var array $kills */
	public $kills;

	/** @var array $victory_points */
	public $victory_points;
}