<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Graphic extends Model
{
	/** @var string $graphic_file */
	public $graphic_file;

	/** @var string $sof_race_name */
	public $sof_race_name;

	/** @var string $sof_faction_name */
	public $sof_faction_name;

	/** @var string $sof_dna */
	public $sof_dna;

	/** @var string $sof_hull_name */
	public $sof_hull_name;

	/** @var string $collision_file */
	public $collision_file;

	/** @var string $icon_folder */
	public $icon_folder;

	public function map()
	{
		return [
			'graphic_id' => Model\Map::set('id'),
		];
	}
}