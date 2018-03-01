<?php
namespace Eve\Models\Shared\Contracts;

use Eve\Abstracts\Model;

final class Item extends Model
{
	/** @var int $record_id */
	public $record_id;

	/** @var int $type_id */
	public $type_id;

	/** @var int $quantity */
	public $quantity;

	/** @var int $raw_quantity */
	public $raw_quantity;

	/** @var bool $is_singleton */
	public $is_singleton;

	/** @var bool $is_included */
	public $is_included;
}