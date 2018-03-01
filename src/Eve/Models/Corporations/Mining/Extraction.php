<?php
namespace Eve\Models\Corporations\Mining;

use Eve\Abstracts\Model;

final class Extraction extends Model
{
	/** @var int $structure_id */
	public $structure_id;

	/** @var int $moon_id */
	public $moon_id;

	/** @var string $extraction_start_time */
	public $extraction_start_time;

	/** @var string $chunk_arrival_time */
	public $chunk_arrival_time;

	/** @var string $natural_decay_time */
	public $natural_decay_time;
}