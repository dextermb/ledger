<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

use Eve\Collections\Corporations\Corporation;

final class Name extends Model
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'corporation_id'   => Model\Map::set('id'),
			'corporation_name' => Model\Map::set('name'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function corporation()
	{
		return (new Corporation)->getItem($this->id);
	}
}