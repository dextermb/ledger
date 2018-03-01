<?php
namespace Eve\Models\Alliances;

use Eve\Helpers\Request;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;

final class Alliance extends Model
{
	/** @var string $name */
	public $name;

	/** @var string $name */
	public $ticker;

	/** @var int $creator_id */
	public $creator_id;

	/** @var int $creator_corporation_id */
	public $creator_corporation_id;

	/** @var int $executor_corporation_id */
	public $executor_corporation_id;

	/** @var string $name */
	public $date_founded;

	/**
	 * @throws ApiException|JsonException
	 * @return int[]
	 */
	public function corporations()
	{
		return (new Request)
			->setEndpoint('/alliances/' . $this->id . '/corporations')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return int[]
	 */
	public function icons()
	{
		return (new Request)
			->setEndpoint('/alliances/' . $this->id . '/icons')
			->run();
	}
}