<?php
namespace Eve\Collections\Sovereignty;

use Eve\Abstracts\Collection;
use Eve\Exceptions\NotImplementedException;

final class Campaign extends Collection
{
	protected $base_uri = '/sovereignty/campaigns';
	protected $model    = \Eve\Models\Sovereignty\Campaign::class;

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