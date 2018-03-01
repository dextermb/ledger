<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Skill extends Model
{
	/** @var array $skills */
	public $skills;

	/** @var int $total_sp */
	public $total_sp;

	/** @var int $unallocated_sp */
	public $unallocated_sp;
}