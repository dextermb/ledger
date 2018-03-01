<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

class Order extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $region_id */
	public $region_id;

	/** @var int $location_id */
	public $location_id;

	/** @var string $range */
	public $range;

	/** @var bool $is_buy_order */
	public $is_buy_order;

	/** @var int $price */
	public $price;

	/** @var int $volume_label */
	public $volume_label;

	/** @var int $volume_remain */
	public $volume_remain;

	/** @var string $issued */
	public $issued;

	/** @var string $state */
	public $state;

	/** @var int $min_volume */
	public $min_volume;

	/** @var int $duration */
	public $duration;

	/** @var int $escrow */
	public $escrow;

	public function map()
	{
		return [
			'order_id' => Model\Map::set('id'),
		];
	}
}