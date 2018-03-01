<?php
namespace Eve\Models\Character\Contracts;

use Eve\Abstracts\Model;

final class Bid extends Model
{
	/** @var int $bidder_id */
	public $bidder_id;

	/** @var string $date_bid */
	public $date_bid;

	/** @var int $amount */
	public $amount;

	public function map()
	{
		return [
			'bid_id' => Model\Map::set('id'),
		];
	}
}