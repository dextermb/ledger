<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;

final class Facility extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $system_id */
	public $system_id;

	public function map()
	{
		return [
			'facility_id' => Model\Map::set('id'),
		];
	}
}