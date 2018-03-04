<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;

use Eve\Traits\GetAlliance;
use Eve\Traits\GetCorporation;
use Eve\Traits\GetFaction;
use Eve\Traits\GetSystem;

final class Map extends Model
{
	use GetCorporation, GetAlliance, GetFaction, GetSystem;
}