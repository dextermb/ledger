<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Ancestor extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $bloodline_id */
	public $bloodline_id;

	/** @var string $description */
	public $description;

	/** @var string $short_description */
	public $short_description;

	/** @var int $icon_id */
	public $icon_id;
}