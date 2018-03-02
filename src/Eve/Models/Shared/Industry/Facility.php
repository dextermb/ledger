<?php
namespace Eve\Models\Shared\Industry;

use Eve\Abstracts\Model;

class Facility extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $system_id */
	public $system_id;

	public function map()
	{
		return [
			'facility_id' => Model\Map::set('id'),
			'solar_system_id' => Model\Map::set('system_id')
		];
	}
}