<?php
namespace Eve\Models\FactionWarfare;

use Eve\Abstracts\Model;
use Eve\Traits\GetFaction;

final class Stat extends Model
{
	use GetFaction;

	/** @var int $pilots */
	public $pilots;

	/** @var int $systems_controlled */
	public $systems_controlled;

	/** @var array $kills */
	public $kills;

	/** @var array $victory_points */
	public $victory_points;
}