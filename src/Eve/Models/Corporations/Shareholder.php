<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;

final class Shareholder extends Model
{
	/** @var string $shareholder_type */
	public $shareholder_type;

	/** @var int $share_count */
	public $share_count;

	public function map()
	{
		return [
			'shareholder_id' => Model\Map::set('id'),
		];
	}
}