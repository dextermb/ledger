<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Fitting extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var int $ship_type_id */
	public $ship_type_id;

	/** @var array $items */
	public $items;

	public function map()
	{
		return [
			'fitting_id' => Model\Map::set('id'),
		];
	}
}