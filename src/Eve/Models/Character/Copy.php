<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Copy extends Model
{
	/** @var string $last_clone_jump_date */
	public $last_clone_jump_date;

	/** @var array $home_location */
	public $home_location;

	/** @var array $last_station_change_date */
	public $last_station_change_date;

	/** @var array $jump_clones */
	public $jump_clones;
}