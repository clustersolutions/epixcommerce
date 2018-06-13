<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsVariantsValue
 * 
 * @property int $id
 * @property int $languages_id
 * @property int $products_variants_groups_id
 * @property string $title
 * @property int $sort_order
 * 
 * @property \OSC\Models\OscProductsVariantsGroup $osc_products_variants_group
 * @property \OSC\Models\OscLanguage $osc_language
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_variants
 * @property \Illuminate\Database\Eloquent\Collection $osc_shopping_carts_custom_variants_values
 *
 * @package OSC\Models
 */
class OscProductsVariantsValue extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'languages_id' => 'int',
		'products_variants_groups_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'products_variants_groups_id',
		'title',
		'sort_order'
	];

	public function osc_products_variants_group()
	{
		return $this->belongsTo(\OSC\Models\OscProductsVariantsGroup::class, 'products_variants_groups_id');
	}

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}

	public function osc_products_variants()
	{
		return $this->hasMany(\OSC\Models\OscProductsVariant::class, 'products_variants_values_id');
	}

	public function osc_shopping_carts_custom_variants_values()
	{
		return $this->hasMany(\OSC\Models\OscShoppingCartsCustomVariantsValue::class, 'products_variants_values_id');
	}
}
