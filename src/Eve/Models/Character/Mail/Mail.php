<?php
namespace Eve\Models\Character\Mail;

use Eve\Models\Shared;

final class Mail extends Shared\Mail
{
	/** @var string $body */
	public $body;

	/** @var bool $read */
	public $read;
}