<?php
namespace Eve\Traits;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Alliances\Alliance;

trait GetAlliance
{
	/** @var int $alliance_id */
	public $alliance_id;

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return null|Model
	 */
	public function alliance()
	{
		if (!$this->alliance_id) {
			return null;
		}

		return (new Alliance)->getItem($this->alliance_id);
	}
}