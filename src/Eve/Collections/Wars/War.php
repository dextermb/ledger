<?php
namespace Eve\Collections\Wars;

use Eve\Abstracts\Collection;

final class War extends Collection
{
	protected $base_uri = '/wars';
	protected $model    = \Eve\Models\Wars\War::class;
}