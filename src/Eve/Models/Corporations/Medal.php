<?php
namespace Eve\Models\Corporations;

use Eve\Models\Shared;

final class Medal extends Shared\Medal
{
	/** @var int $creator_id */
	public $creator_id;

	/** @var string $created_at */
	public $created_at;
}