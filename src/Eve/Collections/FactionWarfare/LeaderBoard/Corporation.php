<?php
namespace Eve\Collections\FactionWarfare\LeaderBoard;

use Eve\Collections\FactionWarfare\LeaderBoard;

class Corporation extends LeaderBoard
{
	protected $base_uri = '/fw/leaderboards/corporations';
	protected $model    = \Eve\Models\FactionWarfare\LeaderBoard\Corporation::class;
}