<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

class Mail extends Model
{
	/** @var string $subject */
	public $subject;

	/** @var int $from */
	public $from;

	/** @var string $timestamp */
	public $timestamp;

	/** @var array $labels */
	public $labels;

	/** @var array $recipients */
	public $recipients;

	public function map()
	{
		return [
			'mail_id' => Model\Map::set('id'),
		];
	}
}