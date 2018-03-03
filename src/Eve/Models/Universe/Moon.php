<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

final class Moon extends Model
{
	/** @var string $name */
	public $name;

	/** @var array $position */
	public $position;

	/** @var int $system_id */
	public $system_id;

	public function map()
	{
		return [
			'moon_id' => Model\Map::set('id'),
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
}