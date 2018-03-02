<?php
namespace Eve\Models\Opportunities;

use Eve\Abstracts\Model;

final class Task extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var string $notification */
	public $notification;

	public function map()
	{
		return [
			'task_id' => Model\Map::set('id'),
		];
	}
}