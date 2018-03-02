<?php
namespace Eve\Models\Markets;

use Eve\Abstracts\Model;

final class Structure extends Model
{
	/** @var int $order_id */
	public $order_id;

	/** @var int $type_id */
	public $type_id;

	/** @var int $location_id */
	public $location_id;

	/** @var int $volume_total */
	public $volume_total;

	/** @var int $volume_remain */
	public $volume_remain;

	/** @var int $min_volume */
	public $min_volume;

	/** @var int $price */
	public $price;

	/** @var bool $is_buy_order */
	public $is_buy_order;

	/** @var int $duration */
	public $duration;

	/** @var string $issued */
	public $issued;

	/** @var string $range */
	public $range;
}