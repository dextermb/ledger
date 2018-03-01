<?php
namespace Eve\Models\Corporations\Mining;

use Eve\Abstracts\Model;

final class Observer extends Model
{
	/** @var string $last_updated */
	public $last_updated;

	/** @var string $observer_type */
	public $observer_type;

	public function map()
	{
		return [
			'observer_id' => Model\Map::set('id'),
		];
	}
}