<?php
namespace Eve\Collections\Universe;

use Eve\Abstracts\Collection;

final class Constellation extends Collection
{
	protected $base_uri = '/universe/constellations';
	protected $model    = \Eve\Models\Universe\Constellation::class;
}