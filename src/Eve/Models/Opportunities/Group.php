<?php
namespace Eve\Models\Opportunities;

use Eve\Abstracts\Model;

final class Group extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var string $notification */
	public $notification;

	/** @var int $required_tasks */
	public $required_tasks;

	/** @var int $connected_groups */
	public $connected_groups;

	public function map()
	{
		return [
			'group_id' => Model\Map::set('id'),
		];
	}
}