<?php
namespace Eve\Models\Corporations\Members;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class Title extends Model
{
	use GetCharacter;

	/** @var array $titles */
	public $titles;
}