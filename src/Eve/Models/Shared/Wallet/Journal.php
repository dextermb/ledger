<?php
namespace Eve\Models\Shared\Wallet;

use Eve\Abstracts\Model;

final class Journal extends Model
{
	/** @var string $date */
	public $date;

	/** @var int $ref_id */
	public $ref_id;

	/** @var string $ref_type */
	public $ref_type;

	/** @var int $first_party_id */
	public $first_party_id;

	/** @var string $first_party_type */
	public $first_party_type;

	/** @var int $second_party_id */
	public $second_party_id;

	/** @var string $secondary_party_type */
	public $secondary_party_type;

	/** @var int $amount */
	public $amount;

	/** @var int $balance */
	public $balance;

	/** @var string $reason */
	public $reason;

	/** @var int $tax_receiver_id */
	public $tax_receiver_id;

	/** @var int $tax */
	public $tax;

	/** @var array $extra_info */
	public $extra_info;
}