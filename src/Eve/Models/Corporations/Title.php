<?php
namespace Eve\Models\Corporations;

use Eve\Models\Shared;

final class Title extends Shared\Title
{
	/** @var array $roles */
	public $roles;

	/** @var array $grantable_roles */
	public $grantable_roles;

	/** @var array $roles_at_hq */
	public $roles_at_hq;

	/** @var array $grantable_roles_at_hq */
	public $grantable_roles_at_hq;

	/** @var array $roles_at_base */
	public $roles_at_base;

	/** @var array $grantable_roles_at_base */
	public $grantable_roles_at_base;

	/** @var array $roles_at_other */
	public $roles_at_other;

	/** @var array $grantable_roles_at_other */
	public $grantable_roles_at_other;
}