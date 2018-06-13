<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscTaxRate
 * 
 * @property int $tax_rates_id
 * @property int $tax_zone_id
 * @property int $tax_class_id
 * @property int $tax_priority
 * @property float $tax_rate
 * @property string $tax_description
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 * 
 * @property \OSC\Models\OscTaxClass $osc_tax_class
 * @property \OSC\Models\OscGeoZone $osc_geo_zone
 *
 * @package OSC\Models
 */
class OscTaxRate extends Eloquent
{
	protected $primaryKey = 'tax_rates_id';
	public $timestamps = false;

	protected $casts = [
		'tax_zone_id' => 'int',
		'tax_class_id' => 'int',
		'tax_priority' => 'int',
		'tax_rate' => 'float'
	];

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'tax_zone_id',
		'tax_class_id',
		'tax_priority',
		'tax_rate',
		'tax_description',
		'last_modified',
		'date_added'
	];

	public function osc_tax_class()
	{
		return $this->belongsTo(\OSC\Models\OscTaxClass::class, 'tax_class_id');
	}

	public function osc_geo_zone()
	{
		return $this->belongsTo(\OSC\Models\OscGeoZone::class, 'tax_zone_id');
	}
}
