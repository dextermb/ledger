<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Order extends Model
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

	/** @var int $account_id */
	public $account_id;

	/** @var int $duration */
	public $duration;

	/** @var bool $is_corp */
	public $is_corp;

	/** @var int $escrow */
	public $escrow;

	public function map()
	{
		return [
			'order_id' => Model\Map::set('id'),
		];
	}
}