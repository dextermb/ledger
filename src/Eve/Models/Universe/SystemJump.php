<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class SystemJump extends Model
{
	use GetSystem;

	/** @var array $ship_jumps */
	public $ship_jumps;
}