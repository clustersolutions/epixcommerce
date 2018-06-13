<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscWeightClassesRule
 * 
 * @property int $weight_class_from_id
 * @property int $weight_class_to_id
 * @property float $weight_class_rule
 * 
 * @property \OSC\Models\OscWeightClass $osc_weight_class
 *
 * @package OSC\Models
 */
class OscWeightClassesRule extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'weight_class_from_id' => 'int',
		'weight_class_to_id' => 'int',
		'weight_class_rule' => 'float'
	];

	protected $fillable = [
		'weight_class_rule'
	];

	public function osc_weight_class()
	{
		return $this->belongsTo(\OSC\Models\OscWeightClass::class, 'weight_class_to_id');
	}
}
