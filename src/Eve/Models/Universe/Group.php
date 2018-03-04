<?php
namespace Eve\Models\Universe;

use Eve\Abstracts\Model;

use Eve\Exceptions\ApiException;
use Eve\Exceptions\JsonException;
use Eve\Exceptions\ModelException;
use Eve\Exceptions\NoAccessTokenException;
use Eve\Exceptions\NoRefreshTokenException;

final class Group extends Model
{
	/** @var string $name */
	public $name;

	/** @var bool $published */
	public $published;

	/** @var int $category_id */
	public $category_id;

	/** @var array $types */
	public $types;

	public function map()
	{
		return [
			'group_id' => Model\Map::set('id'),
		];
	}

	/**
	 * @throws ApiException|JsonException|ModelException|NoAccessTokenException|NoRefreshTokenException
	 * @return Model
	 */
	public function category()
	{
		return (new \Eve\Collections\Universe\Category)
			->getItem($this->category_id);
	}
}