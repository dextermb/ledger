<?php
namespace Eve\Models\Loyalty\Stores\Corporation;

use Eve\Abstracts\Model;

final class Offer extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $quantity */
	public $quantity;

	/** @var int $lp_cost */
	public $lp_cost;

	/** @var int $isk_cost */
	public $isk_cost;

	/** @var int $ak_cost */
	public $ak_cost;

	/** @var array $required_items */
	public $required_items;

	public function map()
	{
		return [
			'offer_id' => Model\Map::set('id'),
		];
	}
}