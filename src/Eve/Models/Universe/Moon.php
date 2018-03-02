<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Moon extends Model
{
	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	/** @var int $system_id */
	public $system_id;

	public function map()
	{
		return [
			'moon_id' => Model\Map::set('id'),
		];
	}
}