<?php
namespace Eve\Models\Character\FactionWarfare;

use Eve\Models\Shared;

final class Stat extends Shared\FactionWarfare\Stat
{
	/** @var int $current_rank */
	public $current_rank;

	/** @var int $highest_rank */
	public $highest_rank;
}