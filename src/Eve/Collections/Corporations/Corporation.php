<?php
namespace Eve\Collections\Corporations;

use Eve\Abstracts\Collection;

use Eve\Exceptions\NotImplementedException;

final class Corporation extends Collection
{
	protected $base_url = '/corporations';
	protected $model    = \Eve\Models\Corporations\Corporation::class;

	/**
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getIds()
	{
		throw new NotImplementedException;
	}
}