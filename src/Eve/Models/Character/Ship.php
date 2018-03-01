<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Ship extends Model
{
	/** @var int $ship_type_id */
	public $ship_type_id;

	/** @var int $ship_item_id */
	public $ship_item_id;

	/** @var string $name */
	public $name;

	public function map() {
		return [
			'ship_name' => Model\Map::set('name')
		];
	}
}