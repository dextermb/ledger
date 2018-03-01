<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Roles extends Model
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