<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Calendar extends Model
{
	/** @var int $event_id */
	public $event_id;

	/** @var string $event_date */
	public $event_date;

	/** @var string $title */
	public $title;

	/** @var int $importance */
	public $importance;

	/** @var string $event_response */
	public $event_response;
}