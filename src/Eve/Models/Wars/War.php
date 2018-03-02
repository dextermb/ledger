<?php
namespace Eve\Models\Wars;

use Eve\Helpers\Request;
use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;

final class War extends Model
{
	/** @var string $declared */
	public $declared;

	/** @var string $started */
	public $started;

	/** @var string $retracted */
	public $retracted;

	/** @var string $finished */
	public $finished;

	/** @var bool $mutual */
	public $mutual;

	public $open_for_allies;

	/** @var array $aggressor */
	public $aggressor;

	/** @var array $defender */
	public $defender;

	/** @var array $allies */
	public $allies;

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function killmails()
	{
		return (new Request)
			->setModel(\Eve\Models\Shared\KillMails\KillMail::class)
			->setEndpoint($this->base_uri . '/killmails')
			->run();
	}
}