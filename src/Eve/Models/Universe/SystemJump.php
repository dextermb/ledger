<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class SystemJump extends Model
{
	/** @var int $system_id */
	public $system_id;

	/** @var array $ship_jumps */
	public $ship_jumps;
}