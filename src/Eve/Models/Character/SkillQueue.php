<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class SkillQueue extends Model
{
	/** @var int $skill_id */
	public $skill_id;

	/** @var string $finish_date */
	public $finish_date;

	/** @var string $start_date */
	public $start_date;

	/** @var int $finished_level */
	public $finished_level;

	/** @var int $queue_position */
	public $queue_position;

	/** @var int $training_start_sp */
	public $training_start_sp;

	/** @var int $level_end_sp */
	public $level_end_sp;

	/** @var int $level_start_sp */
	public $level_start_sp;
}