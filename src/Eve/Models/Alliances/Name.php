<?php
namespace Eve\Models\Alliances;

use Eve\Abstracts\Model;
use Eve\Abstracts\Model\Map;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

use Eve\Collections\Alliances\Alliance;

final class Name extends Model
{
	/** @var string $name */
	public $name;

	/**
	 * @return Map[]
	 */
	public function map()
	{
		return [
			'alliance_id'   => Map::set('id'),
			'alliance_name' => Map::set('name'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function alliance()
	{
		return (new Alliance)->getItem($this->id);
	}
}