<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class Moon extends Model
{
	use GetSystem;

	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	public function map()
	{
		return [
			'moon_id' => Model\Map::set('id'),
		];
	}
}