<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetCorporation;
use Eve\Traits\GetSystem;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Faction extends Model
{
	use GetCorporation, GetSystem;

	/** @var string $name */
	public $name;

	/** @var string $description */
	public $description;

	/** @var int $militia_corporation_id */
	public $militia_corporation_id;

	/** @var int $size_factor */
	public $size_factor;

	/** @var int $station_count */
	public $station_count;

	/** @var int $station_system_count */
	public $station_system_count;

	/** @var bool $is_unique */
	public $is_unique;

	public function map()
	{
		return [
			'faction_id'      => Model\Map::set('id'),
			'solar_system_id' => 'system_id',
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function militia()
	{
		return (new \Eve\Collections\Corporations\Corporation)
			->getItem($this->militia_corporation_id);
	}
}