<?php
namespace Eve\Traits;

use Eve\Abstracts\Model;
use Eve\Helpers\Request;

use Eve\Models\Character\Character;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

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

		return (new Request)
			->setModel(\Eve\Models\Alliances\Alliance::class)
			->setEndpoint('/alliances/' . $this->alliance_id)
			->setCharacter($this instanceof Character ? $this : $this->_character)
			->run();
	}
}