<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Loyalty extends Model
{
	/** @var int $corporation_id */
	public $corporation_id;

	/** @var int $loyalty_points */
	public $loyalty_points;
}