<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;
use Eve\Traits\GetCorporation;

final class Structure extends Model
{
	use GetCorporation;

	/** @var int $type_id */
	public $type_id;

	/** @var int $system_id */
	public $system_id;

	/** @var int $profile_id */
	public $profile_id;

	/** @var string $fuel_expires */
	public $fuel_expires;

	/** @var array $services */
	public $services;

	/** @var string $state_timer_alert */
	public $state_timer_alert;

	/** @var string $state_timer_end */
	public $state_timer_end;

	/** @var string $unanchors_at */
	public $unanchors_at;

	/** @var string $state */
	public $state;

	/** @var int $reinforce_weekday */
	public $reinforce_weekday;

	/** @var int $reinforce_hour */
	public $reinforce_hour;

	/** @var int $next_reinforce_weekday */
	public $next_reinforce_weekday;

	/** @var int $next_reinforce_hour */
	public $next_reinforce_hour;

	/** @var string $next_reinforce_apply */
	public $next_reinforce_apply;

	public function map()
	{
		return [
			'structure_id' => Model\Map::set('id'),
		];
	}
}