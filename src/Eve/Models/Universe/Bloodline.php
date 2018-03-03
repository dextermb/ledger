<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetCorporation;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;

final class Bloodline extends Model
{
	use GetCorporation;

	/** @var string $name */
	public $name;

	/** @var string $name */
	public $description;

	/** @var int $race_id */
	public $race_id;

	/** @var int $ship_type_id */
	public $ship_type_id;

	/** @var int $willpower */
	public $willpower;

	/** @var int $charisma */
	public $charisma;

	/** @var int $memory */
	public $memory;

	/** @var int $intelligence */
	public $intelligence;

	public function map()
	{
		return [
			'bloodline_id' => Model\Map::set('id'),
		];
	}

	/**
	 * @throws ApiException|JsonException
	 * @return Model|null
	 */
	public function race()
	{
		return (new \Eve\Collections\Universe\Race)
			->getItems()->where('id', $this->race_id)[0];
	}
}