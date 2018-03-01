<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

class Role extends Model
{
	/** @var array $roles */
	public $roles;

	/** @var array $roles_at_hq */
	public $roles_at_hq;

	/** @var array $roles_at_base */
	public $roles_at_base;

	/** @var array $roles_at_other */
	public $roles_at_other;
}