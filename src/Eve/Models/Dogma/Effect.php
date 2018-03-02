<?php
namespace Eve\Models\Dogma;

use Eve\Abstracts\Model;

final class Effect extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $display_name */
	public $display_name;

	/** @var string $description */
	public $description;

	/** @var int $icon_id */
	public $icon_id;

	/** @var int $effect_category */
	public $effect_category;

	/** @var int $pre_expression */
	public $pre_expression;

	/** @var int $post_expression */
	public $post_expression;

	/** @var bool $is_offensive */
	public $is_offensive;

	/** @var bool $is_assistance */
	public $is_assistance;

	/** @var bool $disallow_auto_repeat */
	public $disallow_auto_repeat;

	/** @var bool $published */
	public $published;

	/** @var bool $is_warp_safe */
	public $is_warp_safe;

	/** @var int $range_chance */
	public $range_chance;

	/** @var int $electronic_chance */
	public $electronic_chance;

	/** @var int $duration_attribute_id */
	public $duration_attribute_id;

	/** @var int $range_attribute_id */
	public $range_attribute_id;

	public $falloff_attribute_id;

	/** @var array $modifiers */
	public $modifiers;

	public function map()
	{
		return [
			'effect_id' => Model\Map::set('id'),
		];
	}
}