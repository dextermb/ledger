<?php
namespace Eve\Models\Character\Contacts;

use Eve\Abstracts\Model;

final class Label extends Model
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'label_id'   => Model\Map::set('id'),
			'label_name' => Model\Map::set('name'),
		];
	}
}