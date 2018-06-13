<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscConfiguration
 * 
 * @property int $configuration_id
 * @property string $configuration_title
 * @property string $configuration_key
 * @property string $configuration_value
 * @property string $configuration_description
 * @property int $configuration_group_id
 * @property int $sort_order
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 * @property string $use_function
 * @property string $set_function
 * 
 * @property \OSC\Models\OscConfigurationGroup $osc_configuration_group
 *
 * @package OSC\Models
 */
class OscConfiguration extends Eloquent
{
	protected $table = 'osc_configuration';
	protected $primaryKey = 'configuration_id';
	public $timestamps = false;

	protected $casts = [
		'configuration_group_id' => 'int',
		'sort_order' => 'int'
	];

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'configuration_title',
		'configuration_key',
		'configuration_value',
		'configuration_description',
		'configuration_group_id',
		'sort_order',
		'last_modified',
		'date_added',
		'use_function',
		'set_function'
	];

	public function osc_configuration_group()
	{
		return $this->belongsTo(\OSC\Models\OscConfigurationGroup::class, 'configuration_group_id');
	}
}
