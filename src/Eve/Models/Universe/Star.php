<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Star extends Model
{
	use GetSystem;

	/** @var string $name */
	public $name;

	/** @var int $type_id */
	public $type_id;

	/** @var int $age */
	public $age;

	/** @var int $luminosity */
	public $luminosity;

	/** @var int $radius */
	public $radius;

	/** @var string $spectral_class */
	public $spectral_class;

	/** @var int $temperature */
	public $temperature;

	public function map()
	{
		return [
			'solar_system_id' => Model\Map::set('system_id'),
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