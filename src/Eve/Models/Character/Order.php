<?php
namespace Eve\Models\Character;

use Eve\Models\Shared;

final class Order extends Shared\Order
{
	/** @var int $account_id */
	public $account_id;

	/** @var bool $is_corp */
	public $is_corp;
}