<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;
use Eve\Abstracts\Model\Map;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Character\Character;

final class Name extends Model
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'character_id'   => Map::set('id'),
			'character_name' => Map::set('name'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function character()
	{
		return (new Character)->getItem($this->id);
	}
}