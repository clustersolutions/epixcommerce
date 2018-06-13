<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscManufacturer
 * 
 * @property int $manufacturers_id
 * @property string $manufacturers_name
 * @property string $manufacturers_image
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_manufacturers_infos
 * @property \Illuminate\Database\Eloquent\Collection $osc_products
 *
 * @package OSC\Models
 */
class OscManufacturer extends Eloquent
{
	protected $primaryKey = 'manufacturers_id';
	public $timestamps = false;

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'manufacturers_name',
		'manufacturers_image',
		'date_added',
		'last_modified'
	];

	public function osc_manufacturers_infos()
	{
		return $this->hasMany(\OSC\Models\OscManufacturersInfo::class, 'manufacturers_id');
	}

	public function osc_products()
	{
		return $this->hasMany(\OSC\Models\OscProduct::class, 'manufacturers_id');
	}
}
