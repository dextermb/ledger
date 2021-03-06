<?php
namespace Eve\Traits;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Corporations\Corporation;

trait GetCorporation
{
	/** @var int $corporation_id */
	public $corporation_id;

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return null|Model
	 */
	public function corporation()
	{
		if (!$this->corporation_id) {
			return null;
		}

		return (new Corporation)->getItem($this->corporation_id);
	}
}