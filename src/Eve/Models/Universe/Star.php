<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

final class Star extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $solar_system_id */
	public $solar_system_id;

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
}