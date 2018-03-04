<?php
namespace Eve\Traits;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

use Eve\Collections\Universe\System;

trait GetSystem
{
	/** @var int $system_id */
	public $system_id;

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function faction()
	{
		return (new System)->getItem($this->system_id);
	}
}