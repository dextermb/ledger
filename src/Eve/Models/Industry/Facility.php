<?php
namespace Eve\Models\Industry;

use Eve\Models\Shared;

class Facility extends Shared\Industry\Facility
{
	/** @var int $tax */
	public $tax;

	/** @var int $owner_id */
	public $owner_id;

	/** @var int $region_id */
	public $region_id;
}