<?php
namespace Eve\Collections\Sovereignty;

use Eve\Abstracts\Collection;
use Eve\Exceptions\NotImplementedException;

final class Structure extends Collection
{
	protected $base_uri = '/sovereignty/structures';
	protected $model    = \Eve\Models\Sovereignty\Structure::class;

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