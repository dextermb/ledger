<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Fleet extends Model
{
	/** @var int $wing_id */
	public $wing_id;

	/** @var int $squad_id */
	public $squad_id;

	/** @var string $role */
	public $role;

	public function map()
	{
		return [
			'fleet_id' => Model\Map::set('id'),
		];
	}
}