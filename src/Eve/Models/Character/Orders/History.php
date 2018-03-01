<?php
namespace Eve\Models\Character\Orders;

use Eve\Abstracts\Model;

final class History extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $region_id */
	public $region_id;

	/** @var int $location_id */
	public $location_id;

	/** @var string $range */
	public $range;

	/** @var int $price */
	public $price;

	/** @var int $volume_total */
	public $volume_total;

	/** @var int $volume_remain */
	public $volume_remain;

	/** @var string $issued */
	public $issued;

	/** @var bool $is_buy_order */
	public $is_buy_order;

	/** @var int $min_volume */
	public $min_volume;

	/** @var int $escrow */
	public $escrow;

	/** @var int $duration */
	public $duration;

	/** @var string $state */
	public $state;

	/** @var bool $is_corporation */
	public $is_corporation;

	public function map()
	{
		return [
			'order_id' => Model\Map::set('id'),
		];
	}
}