<?php
namespace Eve\Collections\Opportunities;

use Eve\Abstracts\Collection;

final class Group extends Collection
{
	protected $base_uri = '/opportunities/groups';
	protected $model    = \Eve\Models\Opportunities\Group::class;
}