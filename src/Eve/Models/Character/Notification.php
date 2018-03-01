<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Notification extends Model
{
	/** @var int $sender_id */
	public $sender_id;

	/** @var string $sender_type */
	public $sender_type;

	/** @var string $timestamp */
	public $timestamp;

	/** @var bool $is_read */
	public $is_read;

	/** @var string $text */
	public $text;

	/** @var string $type */
	public $type;

	public function map()
	{
		return [
			'notification_id' => Model\Map::set('id'),
		];
	}
}