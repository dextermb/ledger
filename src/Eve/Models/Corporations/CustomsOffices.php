<?php
namespace Eve\Models\Corporations;

use Eve\Abstracts\Model;
use Eve\Traits\GetSystem;

final class CustomsOffices extends Model
{
	use GetSystem;

	/** @var int $reinforce_exit_start */
	public $reinforce_exit_start;

	/** @var int $reinforce_exit_end */
	public $reinforce_exit_end;

	/** @var int $corporation_tax_rate */
	public $corporation_tax_rate;

	/** @var bool $allow_alliance_access */
	public $allow_alliance_access;

	/** @var int $alliance_tax_rate */
	public $alliance_tax_rate;

	/** @var bool $allow_access_with_standings */
	public $allow_access_with_standings;

	/** @var string $standing_level */
	public $standing_level;

	/** @var int $excellent_standing_tax_rate */
	public $excellent_standing_tax_rate;

	/** @var int $good_standing_tax_rate */
	public $good_standing_tax_rate;

	/** @var int $neutral_standing_tax_rate */
	public $neutral_standing_tax_rate;

	/** @var int $bad_standing_tax_rate */
	public $bad_standing_tax_rate;

	/** @var int $terrible_standing_tax_rate */
	public $terrible_standing_tax_rate;

	public function map()
	{
		return [
			'office_id' => Model\Map::set('id'),
		];
	}
}