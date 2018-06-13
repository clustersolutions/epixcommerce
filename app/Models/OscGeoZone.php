<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscGeoZone
 * 
 * @property int $geo_zone_id
 * @property string $geo_zone_name
 * @property string $geo_zone_description
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_tax_rates
 * @property \Illuminate\Database\Eloquent\Collection $osc_zones_to_geo_zones
 *
 * @package OSC\Models
 */
class OscGeoZone extends Eloquent
{
	protected $primaryKey = 'geo_zone_id';
	public $timestamps = false;

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'geo_zone_name',
		'geo_zone_description',
		'last_modified',
		'date_added'
	];

	public function osc_tax_rates()
	{
		return $this->hasMany(\OSC\Models\OscTaxRate::class, 'tax_zone_id');
	}

	public function osc_zones_to_geo_zones()
	{
		return $this->hasMany(\OSC\Models\OscZonesToGeoZone::class, 'geo_zone_id');
	}
}
