<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class CorporationHistory extends Model
{
	/** @var string $start_date */
	public $start_date;

	/** @var int $corporation_id */
	public $corporation_id;

	/** @var bool $is_deleted */
	public $is_deleted;

	/** @var int $record_id */
	public $record_id;
}