<?php
namespace Eve\Models\Alliances;

use Eve\Abstracts\Model;
use Eve\Abstracts\Model\Map;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Alliances\Alliance;

final class Name extends Model
{
	/** @var string $name */
	public $name;

	public function map()
	{
		return [
			'alliance_id'   => Map::set('id'),
			'alliance_name' => Map::set('name'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function alliance()
	{
		return (new Alliance)->getItem($this->id);
	}
}