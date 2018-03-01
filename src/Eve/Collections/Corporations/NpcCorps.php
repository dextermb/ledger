<?php
namespace Eve\Collections\Corporations;

use Eve\Abstracts\Collection;
use Eve\Exceptions\NotImplementedException;

final class NpcCorps extends Collection
{
	protected $base_url = '/corporations/npccorps';

	/**
	 * @param array $ids
	 * @param int   $offset
	 * @param int   $limit
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getItems(array $ids = [], int $offset = 0, int $limit = 50)
	{
		throw new NotImplementedException;
	}

	/**
	 * @param int $id
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getItem(int $id)
	{
		throw new NotImplementedException;
	}
}