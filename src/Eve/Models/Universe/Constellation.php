<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Constellation extends Model
{
	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	/** @var int $region_id */
	public $region_id;

	/** @var array $systems */
	public $systems;

	public function map()
	{
		return [
			'constellation_id' => Model\Map::set('id'),
		];
	}
}