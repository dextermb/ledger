<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

final class Planet extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $type_id */
	public $type_id;

	/** @var array $position */
	public $position;

	/** @var int $system_id */
	public $system_id;

	public function map()
	{
		return [
			'planet_id' => Model\Map::set('id'),
		];
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