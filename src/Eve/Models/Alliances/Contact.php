<?php
namespace Eve\Models\Alliances;

use Eve\Abstracts\Model;

final class Contact extends Model
{
	/** @var int $standing */
	public $standing;

	/** @var string $contact_type */
	public $contact_type;

	/** @var int $label_id */
	public $label_id;

	public function map()
	{
		return [
			'contact_id' => Model\Map::set('id'),
		];
	}
}