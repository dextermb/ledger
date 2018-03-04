<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Planet extends Model
{
	use GetSystem;

	/** @var string $name */
	public $name;

	/** @var int $type_id */
	public $type_id;

	/** @var array $position */
	public $position;

	public function map()
	{
		return [
			'planet_id' => Model\Map::set('id'),
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