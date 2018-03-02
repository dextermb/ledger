<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Category extends Collection
{
	protected $base_uri = '/universe/categories';
	protected $model    = \Eve\Models\Universe\Category::class;
}