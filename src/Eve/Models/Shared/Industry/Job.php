<?php
namespace Eve\Models\Shared\Industry;

use Eve\Abstracts\Model;

class Job extends Model
{
	/** @var int $installer_id */
	public $installer_id;

	/** @var int $activity_id */
	public $activity_id;

	/** @var int $blueprint_id */
	public $blueprint_id;

	/** @var int $blueprint_type_id */
	public $blueprint_type_id;

	/** @var int $output_location_id */
	public $output_location_id;

	/** @var int $runs */
	public $runs;

	/** @var int $cost */
	public $cost;

	/** @var int $licensed_runs */
	public $licensed_runs;

	/** @var int $probability */
	public $probability;

	/** @var int $product_type_id */
	public $product_type_id;

	/** @var string $status */
	public $status;

	/** @var int $duration */
	public $duration;

	/** @var string $start_date */
	public $start_date;

	/** @var string $end_date */
	public $end_date;

	/** @var string $pause_date */
	public $pause_date;

	/** @var string $completed_date */
	public $completed_date;

	/** @var int $completed_character_id */
	public $completed_character_id;

	/** @var int $successful_runs */
	public $successful_runs;

	public function map()
	{
		return [
			'job_id' => Model\Map::set('id'),
		];
	}
}