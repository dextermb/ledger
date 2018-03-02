<?php
namespace Eve\Collections\FactionWarfare\LeaderBoard;

use Eve\Collections\FactionWarfare\LeaderBoard;

class Character extends LeaderBoard
{
	protected $base_uri = '/fw/leaderboards/characters';
	protected $model    = \Eve\Models\FactionWarfare\LeaderBoard\Character::class;
}