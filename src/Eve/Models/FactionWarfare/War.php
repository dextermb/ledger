<?php
namespace Eve\Models\FactionWarfare;

use Eve\Abstracts\Model;
use Eve\Traits\GetFaction;

final class War extends Model
{
	use GetFaction;

	/** @var int $against_id */
	public $against_id;
}