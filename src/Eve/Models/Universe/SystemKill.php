<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

final class SystemKill extends Model
{
	/** @var int $system_id */
	public $system_id;

	/** @var int $skip_kills */
	public $skip_kills;

	/** @var int $npc_kills */
	public $npc_kills;

	/** @var int $pod_kills */
	public $pod_kills;

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function system()
	{
		return (new \Eve\Collections\Universe\System)
			->getItem($this->system_id);
	}
}