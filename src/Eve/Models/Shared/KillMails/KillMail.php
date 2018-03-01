<?php
namespace Eve\Models\Shared\KillMails;

use Eve\Abstracts\Model;

final class KillMail extends Model
{
	/** @var string $hash */
	public $hash;

	public function map()
	{
		return [
			'killmail_id'   => Model\Map::set('id'),
			'killmail_hash' => Model\Map::set('hash'),
		];
	}
}