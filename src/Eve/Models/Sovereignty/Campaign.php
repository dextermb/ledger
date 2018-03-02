<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;

final class Campaign extends Model
{
	/** @var int $structure_id */
	public $structure_id;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $constellation_id */
	public $constellation_id;

	/** @var string $event_type */
	public $event_type;

	/** @var int $start_time */
	public $start_time;

	/** @var int $defender_id */
	public $defender_id;

	/** @var int $defender_scope */
	public $defender_scope;

	/** @var int $attackers_score */
	public $attackers_score;

	/** @var array $participants */
	public $participants;

	public function map()
	{
		return [
			'campaign_id' => Model\Map::set('id'),
		];
	}
}