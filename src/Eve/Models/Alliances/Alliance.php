<?php
namespace Eve\Models\Alliances;

use Eve\Collections\Corporations\Corporation;
use Eve\Helpers\Request;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;

use Eve\Collections\Character\Character;

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
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function creator()
	{
		return (new Character)->getItem($this->creator_id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function creatorCorporation()
	{
		if (!$this->creator_corporation_id) {
			return null;
		}

		return (new Corporation)->getItem($this->creator_corporation_id);
	}

	/**
	 * @throws ApiException|JsonException|ModelException
	 * @return Model
	 */
	public function executorCorporation()
	{
		if (!$this->executor_corporation_id) {
			return null;
		}

		return (new Corporation)->getItem($this->executor_corporation_id);
	}

	/**
	 * @throws ApiException|JsonException
	 * @return int[]
	 */
	public function corporations()
	{
		return (new Request)
			->setEndpoint($this->base_uri . '/corporations')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return int[]
	 */
	public function icons()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\Icon::class)
			->setEndpoint($this->base_uri . '/icons')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return int[]
	 */
	public function contacts()
	{
		return (new Request)
			->setModel(Contact::class)
			->setEndpoint($this->base_uri . '/contacts')
			->run();
	}
}