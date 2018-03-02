<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetAlliance;

final class Race extends Model
{
	use GetAlliance;

	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	public function map()
	{
		return [
			'race_id' => Model\Map::set('id'),
		];
	}
}