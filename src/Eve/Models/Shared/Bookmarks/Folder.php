<?php
namespace Eve\Models\Shared\Bookmarks;

use Eve\Abstracts\Model\Map;

class Folder
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'folder_id' => Map::set('id'),
		];
	}
}