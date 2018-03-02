<?php
namespace Eve\Models\Insurance;

use Eve\Abstracts\Model;

final class Price extends Model
{
	/** @var int $type_id */
	public $type_id;

	/** @var array $levels */
	public $levels;
}