<?php
namespace Eve\Models\Character;

use Eve\Models\Shared;
use Eve\Traits\GetCorporation;

final class Medal extends Shared\Medal
{
	use GetCorporation;

	/** @var int $issuer_id */
	public $issuer_id;

	/** @var string $date */
	public $date;

	/** @var string $reason */
	public $reason;

	/** @var string $status */
	public $status;

	/** @var array $graphics */
	public $graphics;
}