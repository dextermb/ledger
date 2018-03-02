<?php
namespace Eve\Collections\Dogma;

use Eve\Abstracts\Collection;

final class Attribute extends Collection
{
	protected $base_uri = '/dogma/attributes';
	protected $model    = \Eve\Models\Dogma\Attribute::class;
}