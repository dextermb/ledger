<?php
namespace Eve\Models\Character\Mail;

use Eve\Abstracts\Model;

final class Label extends Model
{
	/** @var int $total_unread_count */
	public $total_unread_count;

	/** @var array $labels */
	public $labels;
}