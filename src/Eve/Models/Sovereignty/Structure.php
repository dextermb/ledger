<?php
namespace Eve\Models\Sovereignty;

use Eve\Abstracts\Model;
use Eve\Traits\GetAlliance;
use Eve\Traits\GetSystem;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Structure extends Model
{
	use GetAlliance, GetSystem;

	/** @var int $type_id */
	public $type_id;

	/** @var int $vulnerability_occupancy_level */
	public $vulnerability_occupancy_level;

	/** @var string $vulnerable_start_time */
	public $vulnerable_start_time;

	/** @var string $vulnerable_end_time */
	public $vulnerable_end_time;

	public function map()
	{
		return [
			'structure_id'      => Model\Map::set('id'),
			'structure_type_id' => Model\Map::set('type_id'),
			'solar_system_id'   => Model\Map::set('system_id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function type()
	{
		return (new \Eve\Collections\Universe\Type)
			->getItem($this->type_id);
	}
}