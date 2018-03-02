<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;

use Eve\Traits\GetAlliance;
use Eve\Traits\GetCorporation;

final class Map extends Model
{
	use GetCorporation, GetAlliance;

	/** @var int $system_id */
	public $system_id;

	/** @var int $faction_id */
	public $faction_id;
}