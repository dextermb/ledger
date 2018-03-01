<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;
use Eve\Traits\GetCorporation;

final class CorporationHistory extends Model
{
	use GetCorporation;

	/** @var string $start_date */
	public $start_date;

	/** @var bool $is_deleted */
	public $is_deleted;

	/** @var int $record_id */
	public $record_id;
}