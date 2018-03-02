<?php
namespace Eve\Collections\Opportunities;

use Eve\Abstracts\Collection;

final class Task extends Collection
{
	protected $base_uri = '/opportunities/tasks';
	protected $model    = \Eve\Models\Opportunities\Task::class;
}