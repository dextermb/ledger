<?php
namespace Eve\Collections\Character;

use Eve\Abstracts\Collection;
use Eve\Exceptions\NotImplementedException;

use Eve\Models\Character\Character as Model;

/**
 * Class Character
 *
 * @method Model[] getItems(array $ids)
 * @method Model getItem(int $id)
 *
 * @package Eve\Collections\Character
 */
final class Character extends Collection
{
	protected $base_url = '/characters';
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