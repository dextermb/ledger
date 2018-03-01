<?php
namespace Eve\Models\Character;

use Eve\Abstracts\Model;

final class Portrait extends Model
{
	/** @var string $px64x64 */
	public $px64x64;

	/** @var string $px128x128 */
	public $px128x128;

	/** @var string $px256x256 */
	public $px256x256;

	/** @var string $px512x512 */
	public $px512x512;
}