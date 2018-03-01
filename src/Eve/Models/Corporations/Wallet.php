<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;

final class Wallet extends Model
{
	/** @var int $division */
	public $division;

	/** @var int $balance */
	public $balance;
}