<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Contract extends Model
{
	/** @var int $issuer_id */
	public $issuer_id;

	/** @var int $issuer_corporation_id */
	public $issuer_corporation_id;

	/** @var int $assignee_id */
	public $assignee_id;

	/** @var int $acceptor_id */
	public $acceptor_id;

	/** @var int $start_location_id */
	public $start_location_id;

	/** @var int $end_location_id */
	public $end_location_id;

	/** @var string $type */
	public $type;

	/** @var string $status */
	public $status;

	/** @var string $title */
	public $title;

	/** @var bool $for_corporation */
	public $for_corporation;

	/** @var string $availability */
	public $availability;

	/** @var string $date_issued */
	public $date_issued;

	/** @var string $date_expired */
	public $date_expired;

	/** @var string $date_accepted */
	public $date_accepted;

	/** @var int $days_to_complete */
	public $days_to_complete;

	/** @var string $date_completed */
	public $date_completed;

	/** @var int $price */
	public $price;

	/** @var int $reward */
	public $reward;

	/** @var int $collateral */
	public $collateral;

	/** @var int $buyout */
	public $buyout;

	/** @var int $volume */
	public $volume;

	public function map()
	{
		return [
			'contact_id' => Model\Map::set('id'),
		];
	}
}