<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class System extends Collection
{
	protected $base_uri = '/universe/systems';
	protected $model    = \Eve\Models\Universe\System::class;
}