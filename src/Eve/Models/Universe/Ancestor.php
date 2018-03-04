<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Ancestor extends Model
{
	/** @var string $name */
	public $name;

	/** @var int $bloodline_id */
	public $bloodline_id;

	/** @var string $description */
	public $description;

	/** @var string $short_description */
	public $short_description;

	/** @var int $icon_id */
	public $icon_id;

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model|null
	 */
	public function bloodline()
	{
		return (new \Eve\Collections\Universe\Bloodline)
			->getItems()->where('id', $this->bloodline_id)[0];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function icon()
	{
		return (new \Eve\Collections\Universe\Graphic)
			->getItem($this->icon_id);
	}
}