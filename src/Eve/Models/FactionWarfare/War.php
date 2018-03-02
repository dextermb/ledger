<?php
namespace Eve\Models\FactionWarfare;

use Eve\Abstracts\Model;

final class War extends Model
{
	/** @var int $faction_id */
	public $faction_id;

	/** @var int $against_id */
	public $against_id;
}