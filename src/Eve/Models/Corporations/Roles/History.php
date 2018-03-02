<?php
namespace Eve\Models\Corporations\Roles;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class History extends Model
{
	use GetCharacter;

	/** @var string $changed_at */
	public $changed_at;

	/** @var int $issuer_id */
	public $issuer_id;

	/** @var string $role_type */
	public $role_type;

	/** @var array $old_roles */
	public $old_roles;

	/** @var array $new_roles */
	public $new_roles;
}