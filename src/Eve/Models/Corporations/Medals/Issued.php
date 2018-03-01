<?php
namespace Eve\Models\Corporations\Medals;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class Issued extends Model
{
	use GetCharacter;

	/** @var int $medal_id */
	public $medal_id;

	/** @var string $reason */
	public $reason;

	/** @var string $status */
	public $status;

	/** @var int $medal_id */
	public $issuer_id;

	/** @var string $issued_at */
	public $issued_at;
}