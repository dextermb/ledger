<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Stat extends Model
{
	/** @var int $year */
	public $year;

	/** @var array $character */
	public $character;

	/** @var array $combat */
	public $combat;

	/** @var array $industry */
	public $industry;

	/** @var array $inventory */
	public $inventory;

	/** @var array $isk */
	public $isk;

	/** @var array $market */
	public $market;

	/** @var array $mining */
	public $mining;

	/** @var array $module */
	public $module;

	/** @var array $orbital */
	public $orbital;

	/** @var array $pve */
	public $pve;

	/** @var array $social */
	public $social;

	/** @var array $travel¬ */
	public $travel;
}