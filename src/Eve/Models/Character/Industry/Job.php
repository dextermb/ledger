<?php
namespace Eve\Models\Character\Industry;

use Eve\Abstracts\Model;
use Eve\Models\Shared;

final class Job extends Shared\Industry\Job
{
	/** @var int $station_id */
	public $station_id;

	public function map()
	{
		return [
			'job_id' => Model\Map::set('id'),
		];
	}
}