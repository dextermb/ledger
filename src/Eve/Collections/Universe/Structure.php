<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Structure extends Collection
{
	protected $base_uri = '/universe/structures';
	protected $model    = \Eve\Models\Universe\Structure::class;
}