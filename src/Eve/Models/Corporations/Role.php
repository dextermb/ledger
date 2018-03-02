<?php
namespace Eve\Models\Corporations;

use Eve\Models\Shared;
use Eve\Traits\GetCharacter;

class Role extends Shared\Role
{
	use GetCharacter;

	/** @var array $grantable_roles */
	public $grantable_roles;

	/** @var array $grantable_roles_at_hq */
	public $grantable_roles_at_hq;

	/** @var array $grantable_roles_at_base */
	public $grantable_roles_at_base;

	/** @var array $grantable_roles_at_other */
	public $grantable_roles_at_other;
}