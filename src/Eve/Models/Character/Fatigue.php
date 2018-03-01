<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Fatigue extends Model
{
	/** @var string $last_jump_date */
	public $last_jump_date;

	/** @var string $jump_fatigue_expire_date */
	public $jump_fatigue_expire_date;

	/** @var string $last_update_date */
	public $last_update_date;
}