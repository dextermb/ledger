<?php
namespace Eve\Models\Character\Calendar;

use Eve\Abstracts\Model;

final class Event extends Model
{
	/** @var int $owner_id */
	public $owner_id;

	/** @var string $owner_name */
	public $owner_name;

	/** @var string $date */
	public $date;

	/** @var string $title */
	public $title;

	/** @var int $duration */
	public $duration;

	/** @var int $importance */
	public $importance;

	/** @var string $response */
	public $response;

	/** @var string $text */
	public $text;

	/** @var string $owner_type */
	public $owner_type;

	public function map()
	{
		return [
			'event_id' => Model\Map::set('id'),
		];
	}
}