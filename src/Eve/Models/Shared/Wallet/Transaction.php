<?php
namespace Eve\Models\Shared\Wallet;

use Eve\Abstracts\Model;

class Transaction extends Model
{
	/** @var string $date */
	public $date;

	/** @var int $type_id */
	public $type_id;

	/** @var int $location_id */
	public $location_id;

	/** @var int $unit_price */
	public $unit_price;

	/** @var int $quantity */
	public $quantity;

	/** @var int $client_id */
	public $client_id;

	/** @var bool $is_buy */
	public $is_buy;

	/** @var int $journal_ref_id */
	public $journal_ref_id;

	public function map()
	{
		return [
			'transaction_id' => Model\Map::set('id'),
		];
	}
}