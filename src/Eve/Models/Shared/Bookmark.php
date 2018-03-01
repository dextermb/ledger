<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

final class Bookmark extends Model
{
	/** @var int $id */
	public $folder_id;

	/** @var string $created */
	public $created;

	/** @var string $label */
	public $label;

	/** @var string $notes */
	public $notes;

	/** @var int $location_id */
	public $location_id;

	/** @var int $creator_id */
	public $creator_id;

	/** @var array $item */
	public $item;

	/** @var array $coordinates */
	public $coordinates;

	public function map()
	{
		return [
			'bookmark_id' => Model\Map::set('id')
		];
	}
}