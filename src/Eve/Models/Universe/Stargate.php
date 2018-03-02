<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Stargate extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $name */
	public $type_id;

	/** @var array $name */
	public $position;

	/** @var int $name */
	public $system_id;

	/** @var array $name */
	public $destination;

	public function map()
	{
		return [
			'stargate_id' => Model\Map::set('id'),
		];
	}
}