<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class ChatChannel extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $owner_id */
	public $owner_id;

	/** @var string $comparison_key */
	public $comparison_key;

	/** @var bool $has_password */
	public $has_password;

	/** @var string $motd */
	public $motd;

	/** @var array $allowed */
	public $allowed;

	/** @var array $allowed */
	public $operators;

	/** @var array $blocked */
	public $blocked;

	/** @var array $muted */
	public $muted;

	public function map()
	{
		return [
			'channel_id' => Model\Map::set('id'),
		];
	}
}