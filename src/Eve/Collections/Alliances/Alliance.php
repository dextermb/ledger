<?php
namespace Eve\Collections\Alliances;

use Eve\Abstracts\Collection;

final class Alliance extends Collection
{
	protected $base_url = '/alliances';
	protected $model    = \Eve\Models\Alliances\Alliance::class;
}