<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class SystemKill extends Model
{
	use GetSystem;

	/** @var int $skip_kills */
	public $skip_kills;

	/** @var int $npc_kills */
	public $npc_kills;

	/** @var int $pod_kills */
	public $pod_kills;
}