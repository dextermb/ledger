<?php
namespace Eve\Models\Dogma;

use Eve\Abstracts\Model;

final class Attribute extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var int $icon_id */
	public $icon_id;

	/** @var int $default_value */
	public $default_value;

	/** @var bool $published */
	public $published;

	/** @var string $display_name */
	public $display_name;

	/** @var int $unit_id */
	public $unit_id;

	/** @var bool $stackable */
	public $stackable;

	/** @var bool $high_is_good */
	public $high_is_good;

	public function map()
	{
		return [
			'attribute_id' => Model\Map::set('id'),
		];
	}
}