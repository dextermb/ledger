<?php
namespace Eve\Models\Shared;

use Eve\Abstracts\Model;

final class Icon extends Model
{
	/** @var string $px64x64 */
	public $px64x64;

	/** @var string $px128x128 */
	public $px128x128;

	/** @var string $px256x256 */
	public $px256x256;
}