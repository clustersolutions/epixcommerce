<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscZone
 * 
 * @property int $zone_id
 * @property int $zone_country_id
 * @property string $zone_code
 * @property string $zone_name
 * 
 * @property \OSC\Models\OscCountry $osc_country
 * @property \Illuminate\Database\Eloquent\Collection $osc_address_books
 * @property \Illuminate\Database\Eloquent\Collection $osc_zones_to_geo_zones
 *
 * @package OSC\Models
 */
class OscZone extends Eloquent
{
	protected $primaryKey = 'zone_id';
	public $timestamps = false;

	protected $casts = [
		'zone_country_id' => 'int'
	];

	protected $fillable = [
		'zone_country_id',
		'zone_code',
		'zone_name'
	];

	public function osc_country()
	{
		return $this->belongsTo(\OSC\Models\OscCountry::class, 'zone_country_id');
	}

	public function osc_address_books()
	{
		return $this->hasMany(\OSC\Models\OscAddressBook::class, 'entry_zone_id');
	}

	public function osc_zones_to_geo_zones()
	{
		return $this->hasMany(\OSC\Models\OscZonesToGeoZone::class, 'zone_id');
	}
}
