<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;

final class Starbase extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var int $system_id */
	public $system_id;

	/** @var int $moon_id */
	public $moon_id;

	/** @var string $state */
	public $state;

	/** @var string $unanchor_at */
	public $unanchor_at;

	/** @var string $reinforced_until */
	public $reinforced_until;

	/** @var string $onlined_since */
	public $onlined_since;

	public function map()
	{
		return [
			'starbase_id' => Model\Map::set('id'),
		];
	}
}