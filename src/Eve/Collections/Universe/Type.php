<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Type extends Collection
{
	protected $base_uri = '/universe/types';
	protected $model    = \Eve\Models\Universe\Type::class;
}