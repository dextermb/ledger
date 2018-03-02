<?php
namespace Eve\Collections\Markets;

use Eve\Abstracts\Collection;

final class Group extends Collection
{
	protected $base_uri = '/markets/groups';
	protected $model    = \Eve\Models\Markets\Group::class;
}