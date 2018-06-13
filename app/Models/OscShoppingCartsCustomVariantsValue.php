<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscShoppingCartsCustomVariantsValue
 * 
 * @property int $id
 * @property int $shopping_carts_item_id
 * @property int $customers_id
 * @property int $products_id
 * @property int $products_variants_values_id
 * @property string $products_variants_values_text
 * 
 * @property \OSC\Models\OscCustomer $osc_customer
 * @property \OSC\Models\OscProduct $osc_product
 * @property \OSC\Models\OscProductsVariantsValue $osc_products_variants_value
 *
 * @package OSC\Models
 */
class OscShoppingCartsCustomVariantsValue extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'shopping_carts_item_id' => 'int',
		'customers_id' => 'int',
		'products_id' => 'int',
		'products_variants_values_id' => 'int'
	];

	protected $fillable = [
		'shopping_carts_item_id',
		'customers_id',
		'products_id',
		'products_variants_values_id',
		'products_variants_values_text'
	];

	public function osc_customer()
	{
		return $this->belongsTo(\OSC\Models\OscCustomer::class, 'customers_id');
	}

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}

	public function osc_products_variants_value()
	{
		return $this->belongsTo(\OSC\Models\OscProductsVariantsValue::class, 'products_variants_values_id');
	}
}
