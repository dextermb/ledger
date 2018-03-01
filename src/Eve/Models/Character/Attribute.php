<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Attribute extends Model
{
	/** @var int $charisma */
	public $charisma;

	/** @var int $intelligence */
	public $intelligence;

	/** @var int $memory */
	public $memory;

	/** @var int $perception */
	public $perception;

	/** @var int $willpower */
	public $willpower;

	/** @var int $bonus_remaps */
	public $bonus_remaps;

	/** @var string $last_remap_date */
	public $last_remap_date;

	/** @var string $accrued_remap_cooldown_date */
	public $accrued_remap_cooldown_date;
}