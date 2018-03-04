<?php
namespace Eve\Models\Shared\Industry;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

class Facility extends Model
{
	use GetSystem;

	/** @var int $type_id */
	public $type_id;

	public function map()
	{
		return [
			'facility_id' => Model\Map::set('id'),
			'solar_system_id' => Model\Map::set('system_id')
		];
	}
}