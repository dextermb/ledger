<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Region extends Collection
{
	protected $base_uri = '/universe/regions';
	protected $model    = \Eve\Models\Universe\Region::class;
}