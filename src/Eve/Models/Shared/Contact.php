<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Alliances\Alliance;
use Eve\Collections\Character\Character;
use Eve\Collections\Corporations\Corporation;

final class Contact extends Model
{
	const TYPES
		= [
			'ALLIANCE' => 'alliance',
			'CHARACTER' => 'character',
			'CORPORATION' => 'corporation',
			'FACTION' => 'faction',
		];

	/** @var int $standing */
	public $standing;

	/** @var string $contact_type */
	public $contact_type;

	/** @var bool $is_watched */
	public $is_watched;

	/** @var bool $is_blocked */
	public $is_blocked;

	/** @var int $label_id */
	public $label_id;

	public function map()
	{
		return [
			'contact_id' => Model\Map::set('id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function alliance()
	{
		if ($this->contact_type !== self::TYPES['ALLIANCE']) {
			return null;
		}

		return (new Alliance)->getItem($this->id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function character()
	{
		if ($this->contact_type !== self::TYPES['CHARACTER']) {
			return null;
		}

		return (new Character)->getItem($this->id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function corporation()
	{
		if ($this->contact_type !== self::TYPES['CORPORATION']) {
			return null;
		}

		return (new Corporation)->getItem($this->id);
	}
}