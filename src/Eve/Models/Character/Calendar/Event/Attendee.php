<?php
namespace Eve\Models\Character\Calendar\Event;

use Eve\Abstracts\Model;

final class Attendee extends Model
{
	/** @var int $character_id */
	public $character_id;

	/** @var string $event_response */
	public $event_response;
}