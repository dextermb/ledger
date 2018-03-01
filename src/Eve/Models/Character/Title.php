<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Title extends Model
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'title_id' => Model\Map::set('id'),
		];
	}
}