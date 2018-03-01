<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Opportunity extends Model
{
	/** @var int $task_id */
	public $task_id;

	/** @var string $completed_at */
	public $completed_at;
}