<?php
namespace Eve\Models\Corporations\Containers;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class Log extends Model
{
	use GetCharacter;

	/** @var string $logged_at */
	public $logged_at;

	/** @var int $container_id */
	public $container_id;

	/** @var int $container_type_id */
	public $container_type_id;

	/** @var int $location_id */
	public $location_id;

	/** @var string $action */
	public $action;

	/** @var string $password_type */
	public $password_type;

	/** @var int $type_id */
	public $type_id;

	/** @var int $quantity */
	public $quantity;

	/** @var int $old_config_bitmask */
	public $old_config_bitmask;

	/** @var int $new_config_bitmask */
	public $new_config_bitmask;

	/** @var string $location_flag */
	public $location_flag;
}