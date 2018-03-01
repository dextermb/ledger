<?php
namespace Eve\Models\Character\Mail;

use Eve\Abstracts\Model;

final class Lists extends Model
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'mailing_list_id' => Model\Map::set('id'),
		];
	}
}