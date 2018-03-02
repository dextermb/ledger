<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Group extends Model
{
	/** @var string $name */
	public $name;

	/** @var bool $published */
	public $published;

	/** @var int $category_id */
	public $category_id;

	/** @var array $types */
	public $types;

	public function map()
	{
		return [
			'group_id' => Model\Map::set('id'),
		];
	}
}