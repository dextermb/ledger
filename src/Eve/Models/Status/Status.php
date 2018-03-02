<?php
namespace Eve\Models\Status;

use Eve\Abstracts\Model;

final class Status extends Model
{
	/** @var string $start_time */
	public $start_time;

	/** @var int $players */
	public $players;

	/** @var string $server_version */
	public $server_version;

	/** @var bool $vip */
	public $vip;
}