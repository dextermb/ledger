<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class MemberTracking extends Model
{
	use GetCharacter;

	/** @var string $start_date */
	public $start_date;

	/** @var int $base_id */
	public $base_id;

	/** @var string $logon_date */
	public $logon_date;

	/** @var string $logoff_date */
	public $logoff_date;

	/** @var int $location_id */
	public $location_id;

	/** @var int $ship_type_id */
	public $ship_type_id;
}