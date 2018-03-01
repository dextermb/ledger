<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class AgentsResearch extends Model
{
	/** @var int $skill_type_id */
	public $skill_type_id;

	/** @var string $started_at */
	public $started_at;

	/** @var int $points_per_day */
	public $points_per_day;

	/** @var int $remainder_points */
	public $remainder_points;

	public function map() {
		return [
			'agent_id' => Model\Map::set('id')
		];
	}
}