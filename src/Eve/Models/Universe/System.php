<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class System extends Model
{
	/** @var int $star_id */
	public $star_id;

	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	/** @var int $security_status */
	public $security_status;

	/** @var int $constellation_id */
	public $constellation_id;

	/** @var array $planets */
	public $planets;

	/** @var array $stargates */
	public $stargates;

	/** @var array $stations */
	public $stations;

	public function map()
	{
		return [
			'system_id' => Model\Map::set('id'),
		];
	}
}