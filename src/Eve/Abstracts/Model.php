<?php
namespace Eve\Abstracts;

use Eve\Abstracts\Model\Map;

class Model implements \Eve\Interfaces\Model
{
	/** @var int $id */
	public $id;

	/** @var string $base_uri */
	public $base_uri;

	/**
	 * @return Map[]
	 */
	public function map()
	{
		return [];
	}
}