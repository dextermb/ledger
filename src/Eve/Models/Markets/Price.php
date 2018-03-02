<?php
namespace Eve\Models\Markets;

use Eve\Abstracts\Model;

final class Price extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $average_price */
	public $average_price;

	/** @var int $adjusted_price */
	public $adjusted_price;
}