<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCountry
 * 
 * @property int $countries_id
 * @property string $countries_name
 * @property string $countries_iso_code_2
 * @property string $countries_iso_code_3
 * @property string $address_format
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_address_books
 * @property \Illuminate\Database\Eloquent\Collection $osc_zones
 * @property \Illuminate\Database\Eloquent\Collection $osc_zones_to_geo_zones
 *
 * @package OSC\Models
 */
class OscCountry extends Eloquent
{
	protected $primaryKey = 'countries_id';
	public $timestamps = false;

	protected $fillable = [
		'countries_name',
		'countries_iso_code_2',
		'countries_iso_code_3',
		'address_format'
	];

	public function osc_address_books()
	{
		return $this->hasMany(\OSC\Models\OscAddressBook::class, 'entry_country_id');
	}

	public function osc_zones()
	{
		return $this->hasMany(\OSC\Models\OscZone::class, 'zone_country_id');
	}

	public function osc_zones_to_geo_zones()
	{
		return $this->hasMany(\OSC\Models\OscZonesToGeoZone::class, 'zone_country_id');
	}
}
