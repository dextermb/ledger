<?php
namespace Eve\Collections\Character;

use Eve\Abstracts\Collection;
use Eve\Exceptions\NotImplementedException;

use Eve\Models\Character\Character as Model;

final class Character extends Collection
{
	protected $base_uri = '/characters';
	protected $model    = \Eve\Models\Character\Character::class;

	/**
	 * @throws NotImplementedException
	 * @return void
	 */
	public function getIds()
	{
		throw new NotImplementedException;
	}
}