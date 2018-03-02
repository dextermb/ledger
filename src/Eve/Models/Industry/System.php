<?php
namespace Eve\Models\Industry;

use Eve\Abstracts\Model;

final class System extends Model
{
	/** @var array $cost_indices */
	public $cost_indices;

	public function map()
	{
		return [
			'solar_system_id' => Model\Map::set('id'),
		];
	}
}