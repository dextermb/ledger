<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Campaign extends Model
{
	use GetSystem;

	/** @var int $structure_id */
	public $structure_id;

	/** @var int $constellation_id */
	public $constellation_id;

	/** @var string $event_type */
	public $event_type;

	/** @var int $start_time */
	public $start_time;

	/** @var int $defender_id */
	public $defender_id;

	/** @var int $defender_scope */
	public $defender_scope;

	/** @var int $attackers_score */
	public $attackers_score;

	/** @var array $participants */
	public $participants;

	public function map()
	{
		return [
			'campaign_id'     => Model\Map::set('id'),
			'solar_system_id' => Model\Map::set('system_id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function structure()
	{
		return (new \Eve\Collections\Universe\Structure)
			->getItem($this->structure_id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function constellation()
	{
		return (new \Eve\Collections\Universe\Constellation)
			->getItem($this->constellation_id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function defender()
	{
		if (is_null($this->defender_id)) {
			return null;
		}

		return (new \Eve\Collections\Alliances\Alliance)
			->getItem($this->defender_id);
	}
}