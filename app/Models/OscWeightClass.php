<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscWeightClass
 * 
 * @property int $weight_class_id
 * @property string $weight_class_key
 * @property int $language_id
 * @property string $weight_class_title
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 * @property \Illuminate\Database\Eloquent\Collection $osc_products
 * @property \Illuminate\Database\Eloquent\Collection $osc_weight_classes_rules
 *
 * @package OSC\Models
 */
class OscWeightClass extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'weight_class_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'weight_class_key',
		'weight_class_title'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'language_id');
	}

	public function osc_products()
	{
		return $this->hasMany(\OSC\Models\OscProduct::class, 'products_weight_class');
	}

	public function osc_weight_classes_rules()
	{
		return $this->hasMany(\OSC\Models\OscWeightClassesRule::class, 'weight_class_to_id');
	}
}
