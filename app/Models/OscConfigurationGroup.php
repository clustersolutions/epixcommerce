<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscConfigurationGroup
 * 
 * @property int $configuration_group_id
 * @property string $configuration_group_title
 * @property string $configuration_group_description
 * @property int $sort_order
 * @property int $visible
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_configurations
 *
 * @package OSC\Models
 */
class OscConfigurationGroup extends Eloquent
{
	protected $table = 'osc_configuration_group';
	protected $primaryKey = 'configuration_group_id';
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int',
		'visible' => 'int'
	];

	protected $fillable = [
		'configuration_group_title',
		'configuration_group_description',
		'sort_order',
		'visible'
	];

	public function osc_configurations()
	{
		return $this->hasMany(\OSC\Models\OscConfiguration::class, 'configuration_group_id');
	}
}
