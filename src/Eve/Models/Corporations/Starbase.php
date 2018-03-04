<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class Starbase extends Model
{
	use GetSystem;

	/** @var int $type_id */
	public $type_id;

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