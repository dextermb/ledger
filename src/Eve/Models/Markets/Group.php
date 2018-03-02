<?php
namespace Eve\Models\Markets;

use Eve\Abstracts\Model;

final class Group extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var array $types */
	public $types;

	/** @var int $parent_group_id */
	public $parent_group_id;

	public function map()
	{
		return [
			'market_group_id' => Model\Map::set('id'),
		];
	}
}