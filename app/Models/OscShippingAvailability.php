<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscShippingAvailability
 * 
 * @property int $id
 * @property int $languages_id
 * @property string $title
 * @property string $css_key
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscShippingAvailability extends Eloquent
{
	protected $table = 'osc_shipping_availability';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'languages_id' => 'int'
	];

	protected $fillable = [
		'title',
		'css_key'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}
}
