<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscManufacturersInfo
 * 
 * @property int $manufacturers_id
 * @property int $languages_id
 * @property string $manufacturers_url
 * @property int $url_clicked
 * @property \Carbon\Carbon $date_last_click
 * 
 * @property \OSC\Models\OscManufacturer $osc_manufacturer
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscManufacturersInfo extends Eloquent
{
	protected $table = 'osc_manufacturers_info';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'manufacturers_id' => 'int',
		'languages_id' => 'int',
		'url_clicked' => 'int'
	];

	protected $dates = [
		'date_last_click'
	];

	protected $fillable = [
		'manufacturers_url',
		'url_clicked',
		'date_last_click'
	];

	public function osc_manufacturer()
	{
		return $this->belongsTo(\OSC\Models\OscManufacturer::class, 'manufacturers_id');
	}

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}
}
