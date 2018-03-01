<?php
namespace Eve\Models\Character\Calendar\Event;

use Eve\Abstracts\Model;
use Eve\Traits\GetCharacter;

final class Attendee extends Model
{
	use GetCharacter;

	/** @var string $event_response */
	public $event_response;
}