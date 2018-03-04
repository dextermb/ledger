<?php
namespace Eve\Models\KillMails;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class KillMail extends Model
{
	use GetSystem;

	/** @var string $killmail_time */
	public $killmail_time;

	/** @var array $victim */
	public $victim;

	/** @var array $attackers */
	public $attackers;

	/** @var int $moon_id */
	public $moon_id;

	/** @var int $war_id */
	public $war_id;

	public function map()
	{
		return [
			'killmail_id' => Model\Map::set('id'),
			'solar_system_id' => Model\Map::set('system_id')
		];
	}
}