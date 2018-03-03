<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;

use Eve\Traits\GetAlliance;
use Eve\Traits\GetCorporation;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

final class Map extends Model
{
	use GetCorporation, GetAlliance;

	/** @var int $system_id */
	public $system_id;

	/** @var int $faction_id */
	public $faction_id;

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function system()
	{
		return (new \Eve\Collections\Universe\System)
			->getItem($this->system_id);
	}

	/**
	 * @throws ApiException|JsonException
	 * @return Model|null
	 */
	public function faction()
	{
		return (new \Eve\Collections\Universe\Faction)
			->getItems()->where('id', $this->faction_id)[0];
	}
}