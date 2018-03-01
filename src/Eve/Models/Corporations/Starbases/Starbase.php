<?php
namespace Eve\Models\Corporations\Starbases;

use Eve\Abstracts\Model;

final class Starbase extends Model
{
	/** @var string $fuel_bay_view */
	public $fuel_bay_view;

	/** @var string $fuel_bay_take */
	public $fuel_bay_take;

	/** @var string $anchor */
	public $anchor;

	/** @var string $unanchor */
	public $unanchor;

	/** @var string $online */
	public $online;

	/** @var string $offline */
	public $offline;

	/** @var bool $allow_corporation_members */
	public $allow_corporation_members;

	/** @var bool $allow_alliance_members */
	public $allow_alliance_members;

	/** @var bool $use_alliance_standings */
	public $use_alliance_standings;

	/** @var bool $attack_standing_threshold */
	public $attack_standing_threshold;

	/** @var bool $attack_security_status_threshold */
	public $attack_security_status_threshold;

	/** @var bool $attack_if_other_security_status_dropping */
	public $attack_if_other_security_status_dropping;

	/** @var bool $attack_if_at_war */
	public $attack_if_at_war;

	/** @var array $fuels */
	public $fuels;
}