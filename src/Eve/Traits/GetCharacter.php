<?php
namespace Eve\Traits;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

use Eve\Collections\Character\Character;

trait GetCharacter
{
	/** @var int $character_id */
	public $character_id;

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function character()
	{
		return (new Character)->getItem($this->character_id);
	}
}