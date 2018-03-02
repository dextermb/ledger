<?php
namespace Eve\Collections\Sovereignty;

use Eve\Abstracts\Collection;
use Eve\Exceptions\NotImplementedException;

final class Map extends Collection
{
	protected $base_uri = '/sovereignty/maps';
	protected $model    = \Eve\Models\Sovereignty\Map::class;

	/**
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getIds()
	{
		throw new NotImplementedException;
	}

	/**
	 * @param int $id
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getItem(int $id = null)
	{
		throw new NotImplementedException;
	}
}