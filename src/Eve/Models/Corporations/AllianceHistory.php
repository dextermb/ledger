<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;

final class AllianceHistory extends Model
{
	/** @var string $start_date */
	public $start_date;

	/** @var int $alliance_id */
	public $alliance_id;

	/** @var bool $is_deleted */
	public $is_deleted;

	public function map()
	{
		return [
			'record_id' => Model\Map::set('id'),
		];
	}
}