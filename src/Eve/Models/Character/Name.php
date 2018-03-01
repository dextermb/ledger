<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;
use Eve\Abstracts\Model\Map;

final class Name extends Model
{
	/** @var string $name */
	public $name;

	/**
	 * @return Map[]
	 */
	public function map()
	{
		return [
			'character_id'   => Map::set('id'),
			'character_name' => Map::set('name'),
		];
	}

}