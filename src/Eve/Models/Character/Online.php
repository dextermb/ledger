<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Online extends Model
{
	/** @var bool $online */
	public $online;

	/** @var string $last_login */
	public $last_login;

	/** @var string $last_logout */
	public $last_logout;

	/** @var int $logins */
	public $logins;
}