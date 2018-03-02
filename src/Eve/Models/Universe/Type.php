<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Type extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var bool $published */
	public $published;

	/** @var int $group_id */
	public $group_id;

	/** @var int $market_group_id */
	public $market_group_id;

	/** @var int $radius */
	public $radius;

	/** @var int $volume */
	public $volume;

	/** @var int $packaged_volume */
	public $packaged_volume;

	/** @var int $icon_id */
	public $icon_id;

	/** @var int $capacity */
	public $capacity;

	/** @var int $portion_size */
	public $portion_size;

	/** @var int $mass */
	public $mass;

	/** @var int $graphic_id */
	public $graphic_id;

	/** @var array $dogma_attributes */
	public $dogma_attributes;

	/** @var array $dogma_effects */
	public $dogma_effects;

	public function map()
	{
		return [
			'type_id' => Model\Map::set('id'),
		];
	}
}