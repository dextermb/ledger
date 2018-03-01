<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Search extends Model
{
	/** @var array $agent */
	public $agent;

	/** @var array $alliance */
	public $alliance;

	/** @var array $character */
	public $character;

	/** @var array $constellation */
	public $constellation;

	/** @var array $corporation */
	public $corporation;

	/** @var array $faction */
	public $faction;

	/** @var array $inventory_type */
	public $inventory_type;

	/** @var array $region */
	public $region;

	/** @var array $solar_system */
	public $solar_system;

	/** @var array $station */
	public $station;

	/** @var array $structure */
	public $structure;
}