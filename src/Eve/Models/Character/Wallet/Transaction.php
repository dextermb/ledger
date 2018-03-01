<?php
namespace Eve\Models\Character\Wallet;

use Eve\Models\Shared;

class Transaction extends Shared\Wallet\Transaction
{
	/** @var bool $is_personal */
	public $is_personal;
}