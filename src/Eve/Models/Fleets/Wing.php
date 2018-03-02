<?php
namespace Eve\Models\Fleets;

use Eve\Abstracts\Model;

final class Wing extends Model
{
	/** @var string $name */
	public $name;

	/** @var array $squads */
	public $squads;
}