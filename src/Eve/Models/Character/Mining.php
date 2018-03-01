<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Mining extends Model
{
	/** @var string $date */
	public $date;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $type_id */
	public $type_id;

	/** @var int $quantity */
	public $quantity;
}