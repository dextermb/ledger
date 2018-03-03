<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

final class Structure extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $system_id */
	public $system_id;

	/** @var int $type_id */
	public $type_id;

	/** @var array $position */
	public $position;

	public function map()
	{
		return [
			'solar_system_id' => Model\Map::set('system_id'),
		];
	}

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
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function type()
	{
		return (new \Eve\Collections\Universe\Type)
			->getItem($this->type_id);
	}
}