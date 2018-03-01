<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Asset extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $quantity */
	public $quantity;

	/** @var int $location_id */
	public $location_id;

	/** @var string $location_type */
	public $location_type;

	/** @var int $item_id */
	public $item_id;

	/** @var string $location_flag */
	public $location_flag;

	/** @var bool $is_singleton */
	public $is_singleton;
}