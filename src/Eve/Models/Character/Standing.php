<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Standing extends Model
{
	/** @var int $from_id */
	public $from_id;

	/** @var string $from_type */
	public $from_type;

	/** @var int $standing */
	public $standing;
}