<?php
namespace Eve\Interfaces;

use Eve\Interfaces\Model\Map;

interface Model
{
	/**
	 * Remap API response attributes
	 *
	 * @return Map[]
	 */
	public function map();
}