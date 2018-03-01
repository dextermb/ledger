<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

class Title extends Model
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