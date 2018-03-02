<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;
use Eve\Traits\GetAlliance;

final class AllianceHistory extends Model
{
	use GetAlliance;

	/** @var string $start_date */
	public $start_date;

	/** @var bool $is_deleted */
	public $is_deleted;

	public function map()
	{
		return [
			'record_id' => Model\Map::set('id'),
		];
	}
}