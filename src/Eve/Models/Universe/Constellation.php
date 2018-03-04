<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Constellation extends Model
{
	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	/** @var int $region_id */
	public $region_id;

	/** @var array $systems */
	public $systems;

	public function map()
	{
		return [
			'constellation_id' => Model\Map::set('id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function region() {
		return (new \Eve\Collections\Universe\Region)
			->getItem($this->region_id);
	}
}