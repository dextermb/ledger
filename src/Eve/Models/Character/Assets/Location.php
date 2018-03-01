<?php
namespace Eve\Models\Character\Assets;

use Eve\Abstracts\Model;

final class Location extends Model
{
	/** @var int $item_id */
	public $item_id;

	/** @var array $position */
	public $position;
}