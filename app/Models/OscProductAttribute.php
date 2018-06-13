<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductAttribute
 * 
 * @property int $pa_id
 * @property int $id
 * @property int $products_id
 * @property int $languages_id
 * @property string $value
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscProductAttribute extends Eloquent
{
	protected $primaryKey = 'pa_id';
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'products_id' => 'int',
		'languages_id' => 'int'
	];

	protected $fillable = [
		'id',
		'products_id',
		'languages_id',
		'value'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}
}
