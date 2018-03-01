<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Mail extends Model
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

	/** @var bool $is_read */
	public $is_read;

	public function map()
	{
		return [
			'mail_id' => Model\Map::set('id'),
		];
	}
}