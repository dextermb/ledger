<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Region extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var array $constellations */
	public $constellations;

	public function map()
	{
		return [
			'region_id' => Model\Map::set('id'),
		];
	}
}