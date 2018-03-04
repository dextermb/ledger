<?php
namespace Eve\Traits;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Universe\Faction;

trait GetFaction
{
	/** @var int $faction_id */
	public $faction_id;

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function faction()
	{
		return (new Faction)->getItems()->where('id', $this->faction_id)[0];
	}
}