<?php
namespace Eve\Abstracts\Model;


final class Map
{
	/** @var string $key */
	public $key;

	/** @var bool $is_class */
	public $is_class;

	public function __construct(string $key = null, bool $is_class = false)
	{
		$this->key      = $key;
		$this->is_class = $is_class;
	}

	public static function set(string $key, bool $is_class = false)
	{
		$map = new self;

		$map->key      = $key;
		$map->is_class = $is_class;

		return $map;
	}
}