<?php
namespace Eve\Models\Character\Notifications;

use Eve\Abstracts\Model;

final class Contacts extends Model
{
	/** @var int $notification_id */
	public $notification_id;

	/** @var string $send_date */
	public $send_date;

	/** @var int $standing_level */
	public $standing_level;

	/** @var string $message */
	public $message;

	/** @var int $sender_character_id */
	public $sender_character_id;
}