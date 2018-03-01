<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Medal extends Model
{
	/** @var string $title */
	public $title;

	/** @var string $description */
	public $description;

	/** @var int $corporation_id */
	public $corporation_id;

	/** @var int $issuer_id */
	public $issuer_id;

	/** @var string $date */
	public $date;

	/** @var string $reason */
	public $reason;

	/** @var string $status */
	public $status;

	/** @var array $graphics */
	public $graphics;

	public function map()
	{
		return [
			'medal_id' => Model\Map::set('id'),
		];
	}
}