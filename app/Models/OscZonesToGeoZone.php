<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscZonesToGeoZone
 * 
 * @property int $association_id
 * @property int $zone_country_id
 * @property int $zone_id
 * @property int $geo_zone_id
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 * 
 * @property \OSC\Models\OscGeoZone $osc_geo_zone
 * @property \OSC\Models\OscCountry $osc_country
 * @property \OSC\Models\OscZone $osc_zone
 *
 * @package OSC\Models
 */
class OscZonesToGeoZone extends Eloquent
{
	protected $primaryKey = 'association_id';
	public $timestamps = false;

	protected $casts = [
		'zone_country_id' => 'int',
		'zone_id' => 'int',
		'geo_zone_id' => 'int'
	];

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'zone_country_id',
		'zone_id',
		'geo_zone_id',
		'last_modified',
		'date_added'
	];

	public function osc_geo_zone()
	{
		return $this->belongsTo(\OSC\Models\OscGeoZone::class, 'geo_zone_id');
	}

	public function osc_country()
	{
		return $this->belongsTo(\OSC\Models\OscCountry::class, 'zone_country_id');
	}

	public function osc_zone()
	{
		return $this->belongsTo(\OSC\Models\OscZone::class, 'zone_id');
	}
}
