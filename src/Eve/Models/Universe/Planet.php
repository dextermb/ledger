<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Planet extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $type_id */
	public $type_id;

	/** @var array $position */
	public $position;

	/** @var int $system_id */
	public $system_id;

	public function map()
	{
		return [
			'planet_id' => Model\Map::set('id'),
		];
	}
}