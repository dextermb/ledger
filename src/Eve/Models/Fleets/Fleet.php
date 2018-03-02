<?php
namespace Eve\Models\Fleets;

use Eve\Abstracts\Model;
use Eve\Helpers\Request;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;

final class Fleet extends Model
{
	/** @var string $motd */
	public $motd;

	/** @var bool $is_free_move */
	public $is_free_move;

	/** @var bool $is_registered */
	public $is_registered;

	/** @var bool $is_voice_enabled */
	public $is_voice_enabled;

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function members()
	{
		return (new Request)
			->setModel(Member::class)
			->setEndpoint($this->base_uri . '/members')
			->run();
	}

	/**
	 * @throws ApiException|JsonException
	 * @return array|Model|Model[]
	 */
	public function wings()
	{
		return (new Request)
			->setModel(Wing::class)
			->setEndpoint($this->base_uri . '/wings')
			->run();
	}
}