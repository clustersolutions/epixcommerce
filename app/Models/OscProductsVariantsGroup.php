<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsVariantsGroup
 * 
 * @property int $id
 * @property int $languages_id
 * @property string $title
 * @property int $sort_order
 * @property string $module
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_variants_values
 *
 * @package OSC\Models
 */
class OscProductsVariantsGroup extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'languages_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'title',
		'sort_order',
		'module'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}

	public function osc_products_variants_values()
	{
		return $this->hasMany(\OSC\Models\OscProductsVariantsValue::class, 'products_variants_groups_id');
	}
}
