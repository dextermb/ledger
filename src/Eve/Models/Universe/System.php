<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class System extends Model
{
	/** @var int $star_id */
	public $star_id;

	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	/** @var int $security_status */
	public $security_status;

	/** @var int $constellation_id */
	public $constellation_id;

	/** @var array $planets */
	public $planets;

	/** @var array $stargates */
	public $stargates;

	/** @var array $stations */
	public $stations;

	public function map()
	{
		return [
			'system_id' => Model\Map::set('id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function star()
	{
		return (new \Eve\Collections\Universe\Star)
			->getItem($this->star_id);
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
}