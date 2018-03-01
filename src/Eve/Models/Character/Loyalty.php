<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;
use Eve\Traits\GetCorporation;

final class Loyalty extends Model
{
	use GetCorporation;

	/** @var int $loyalty_points */
	public $loyalty_points;
}