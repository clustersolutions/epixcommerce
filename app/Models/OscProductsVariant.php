<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsVariant
 * 
 * @property int $products_id
 * @property int $products_variants_values_id
 * @property int $default_combo
 * 
 * @property \OSC\Models\OscProduct $osc_product
 * @property \OSC\Models\OscProductsVariantsValue $osc_products_variants_value
 *
 * @package OSC\Models
 */
class OscProductsVariant extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'products_variants_values_id' => 'int',
		'default_combo' => 'int'
	];

	protected $fillable = [
		'default_combo'
	];

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}

	public function osc_products_variants_value()
	{
		return $this->belongsTo(\OSC\Models\OscProductsVariantsValue::class, 'products_variants_values_id');
	}
}
