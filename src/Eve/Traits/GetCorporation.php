<?php
namespace Eve\Traits;

use Eve\Helpers\Request;
use Eve\Abstracts\Model;

use Eve\Models\Character\Character;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

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

		return (new Request)
			->setModel(\Eve\Models\Corporations\Corporation::class)
			->setEndpoint('/corporations/' . $this->corporation_id)
			->setCharacter($this instanceof Character ? $this : $this->_character)
			->run();
	}
}