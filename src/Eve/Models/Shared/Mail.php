<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

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

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function from()
	{
		return (new \Eve\Collections\Character\Character)
			->getItem($this->from);
	}
}