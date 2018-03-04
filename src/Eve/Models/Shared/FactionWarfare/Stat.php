<?php
namespace Eve\Models\Shared\FactionWarfare;

use Eve\Abstracts\Model;
use Eve\Traits\GetFaction;

class Stat extends Model
{
	use GetFaction;

	/** @var string $enlisted_on */
	public $enlisted_on;

	/** @var array $kills */
	public $kills;

	/** @var array $victory_points */
	public $victory_points;
}