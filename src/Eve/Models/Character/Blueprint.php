<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Blueprint extends Model
{
	/** @var int $item_id */
	public $item_id;

	/** @var int $type_id */
	public $type_id;

	/** @var int $location_id */
	public $location_id;

	/** @var int $location_flag */
	public $location_flag;

	/** @var int $quantity */
	public $quantity;

	/** @var int $time_efficiency */
	public $time_efficiency;

	/** @var int $material_efficiency */
	public $material_efficiency;

	/** @var int $runs */
	public $runs;
}