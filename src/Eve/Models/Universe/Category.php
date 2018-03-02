<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Category extends Model
{
	/** @var string $name */
	public $name;

	/** @var bool $published */
	public $published;

	/** @var array $groups */
	public $groups;

	public function map()
	{
		return [
			'category_id' => Model\Map::set('id'),
		];
	}
}