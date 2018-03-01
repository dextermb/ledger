<?php
namespace Eve\Models\Corporations\Mining\Observers;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class Observer extends Model
{
	use GetCharacter;

	/** @var string $last_updated */
	public $last_updated;

	/** @var int $record_corporation_id */
	public $record_corporation_id;

	/** @var int $type_id */
	public $type_id;

	/** @var int $quantity */
	public $quantity;
}