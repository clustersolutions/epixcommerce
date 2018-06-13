<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProduct
 * 
 * @property int $products_id
 * @property int $parent_id
 * @property int $products_quantity
 * @property float $products_price
 * @property string $products_model
 * @property \Carbon\Carbon $products_date_added
 * @property \Carbon\Carbon $products_last_modified
 * @property float $products_weight
 * @property int $products_weight_class
 * @property bool $products_status
 * @property int $products_tax_class_id
 * @property int $products_types_id
 * @property int $manufacturers_id
 * @property int $products_ordered
 * @property int $has_children
 * 
 * @property \OSC\Models\OscManufacturer $osc_manufacturer
 * @property \OSC\Models\OscProduct $osc_product
 * @property \OSC\Models\OscTaxClass $osc_tax_class
 * @property \OSC\Models\OscProductType $osc_product_type
 * @property \OSC\Models\OscWeightClass $osc_weight_class
 * @property \Illuminate\Database\Eloquent\Collection $osc_product_attributes
 * @property \Illuminate\Database\Eloquent\Collection $osc_products
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_descriptions
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_images
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_notifications
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_to_categories
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_variants
 * @property \Illuminate\Database\Eloquent\Collection $osc_reviews
 * @property \Illuminate\Database\Eloquent\Collection $osc_shopping_carts
 * @property \Illuminate\Database\Eloquent\Collection $osc_shopping_carts_custom_variants_values
 * @property \Illuminate\Database\Eloquent\Collection $osc_specials
 *
 * @package OSC\Models
 */
class OscProduct extends Eloquent
{
	protected $primaryKey = 'products_id';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'products_quantity' => 'int',
		'products_price' => 'float',
		'products_weight' => 'float',
		'products_weight_class' => 'int',
		'products_status' => 'bool',
		'products_tax_class_id' => 'int',
		'products_types_id' => 'int',
		'manufacturers_id' => 'int',
		'products_ordered' => 'int',
		'has_children' => 'int'
	];

	protected $dates = [
		'products_date_added',
		'products_last_modified'
	];

	protected $fillable = [
		'parent_id',
		'products_quantity',
		'products_price',
		'products_model',
		'products_date_added',
		'products_last_modified',
		'products_weight',
		'products_weight_class',
		'products_status',
		'products_tax_class_id',
		'products_types_id',
		'manufacturers_id',
		'products_ordered',
		'has_children'
	];

	public function osc_manufacturer()
	{
		return $this->belongsTo(\OSC\Models\OscManufacturer::class, 'manufacturers_id');
	}

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'parent_id');
	}

	public function osc_tax_class()
	{
		return $this->belongsTo(\OSC\Models\OscTaxClass::class, 'products_tax_class_id');
	}

	public function osc_product_type()
	{
		return $this->belongsTo(\OSC\Models\OscProductType::class, 'products_types_id');
	}

	public function osc_weight_class()
	{
		return $this->belongsTo(\OSC\Models\OscWeightClass::class, 'products_weight_class');
	}

	public function osc_product_attributes()
	{
		return $this->hasMany(\OSC\Models\OscProductAttribute::class, 'products_id');
	}

	public function osc_products()
	{
		return $this->hasMany(\OSC\Models\OscProduct::class, 'parent_id');
	}

	public function osc_products_descriptions()
	{
		return $this->hasMany(\OSC\Models\OscProductsDescription::class, 'products_id');
	}

	public function osc_products_images()
	{
		return $this->hasMany(\OSC\Models\OscProductsImage::class, 'products_id');
	}

	public function osc_products_notifications()
	{
		return $this->hasMany(\OSC\Models\OscProductsNotification::class, 'products_id');
	}

	public function osc_products_to_categories()
	{
		return $this->hasMany(\OSC\Models\OscProductsToCategory::class, 'products_id');
	}

	public function osc_products_variants()
	{
		return $this->hasMany(\OSC\Models\OscProductsVariant::class, 'products_id');
	}

	public function osc_reviews()
	{
		return $this->hasMany(\OSC\Models\OscReview::class, 'products_id');
	}

	public function osc_shopping_carts()
	{
		return $this->hasMany(\OSC\Models\OscShoppingCart::class, 'products_id');
	}

	public function osc_shopping_carts_custom_variants_values()
	{
		return $this->hasMany(\OSC\Models\OscShoppingCartsCustomVariantsValue::class, 'products_id');
	}

	public function osc_specials()
	{
		return $this->hasMany(\OSC\Models\OscSpecial::class, 'products_id');
	}
}
