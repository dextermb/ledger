<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

class Medal extends Model
{
	/** @var string $title */
	public $title;

	/** @var string $description */
	public $description;

	public function map()
	{
		return [
			'medal_id' => Model\Map::set('id'),
		];
	}
}