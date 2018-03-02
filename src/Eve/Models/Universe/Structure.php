<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Structure extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $solar_system_id */
	public $solar_system_id;

	/** @var int $type_id */
	public $type_id;

	/** @var array $position */
	public $position;
}