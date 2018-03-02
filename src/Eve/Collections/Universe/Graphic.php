<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Graphic extends Collection
{
	protected $base_uri = '/universe/graphics';
	protected $model    = \Eve\Models\Universe\Graphic::class;
}