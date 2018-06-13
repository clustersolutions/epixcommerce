<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsImagesGroup
 * 
 * @property int $id
 * @property int $language_id
 * @property string $title
 * @property string $code
 * @property int $size_width
 * @property int $size_height
 * @property bool $force_size
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscProductsImagesGroup extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'language_id' => 'int',
		'size_width' => 'int',
		'size_height' => 'int',
		'force_size' => 'bool'
	];

	protected $fillable = [
		'title',
		'code',
		'size_width',
		'size_height',
		'force_size'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'language_id');
	}
}
