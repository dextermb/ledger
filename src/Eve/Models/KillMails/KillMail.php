<?php
namespace Eve\Models\KillMails;

use Eve\Abstracts\Model;

final class KillMail extends Model
{
	/** @var string $killmail_time */
	public $killmail_time;

	/** @var array $victim */
	public $victim;

	/** @var array $attackers */
	public $attackers;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $moon_id */
	public $moon_id;

	/** @var int $war_id */
	public $war_id;

	public function map()
	{
		return [
			'killmail_id' => Model\Map::set('id'),
		];
	}
}