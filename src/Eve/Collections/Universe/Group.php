<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Group extends Collection
{
	protected $base_uri = '/universe/groups';
	protected $model    = \Eve\Models\Universe\Group::class;
}