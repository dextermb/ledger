<?php
namespace Eve\Collections\Dogma;

use Eve\Abstracts\Collection;

final class Effect extends Collection
{
	protected $base_uri = '/dogma/effects';
	protected $model    = \Eve\Models\Dogma\Effect::class;
}