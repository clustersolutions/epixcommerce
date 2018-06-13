<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscLanguage
 * 
 * @property int $languages_id
 * @property string $name
 * @property string $code
 * @property string $locale
 * @property string $charset
 * @property string $date_format_short
 * @property string $date_format_long
 * @property string $time_format
 * @property string $text_direction
 * @property int $currencies_id
 * @property string $numeric_separator_decimal
 * @property string $numeric_separator_thousands
 * @property int $parent_id
 * @property int $sort_order
 * 
 * @property \OSC\Models\OscCurrency $osc_currency
 * @property \Illuminate\Database\Eloquent\Collection $osc_categories_descriptions
 * @property \Illuminate\Database\Eloquent\Collection $osc_languages_definitions
 * @property \Illuminate\Database\Eloquent\Collection $osc_manufacturers_infos
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_statuses
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_transactions_statuses
 * @property \Illuminate\Database\Eloquent\Collection $osc_product_attributes
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_descriptions
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_images_groups
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_variants_groups
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_variants_values
 * @property \Illuminate\Database\Eloquent\Collection $osc_reviews
 * @property \Illuminate\Database\Eloquent\Collection $osc_shipping_availabilities
 * @property \Illuminate\Database\Eloquent\Collection $osc_weight_classes
 *
 * @package OSC\Models
 */
class OscLanguage extends Eloquent
{
	protected $primaryKey = 'languages_id';
	public $timestamps = false;

	protected $casts = [
		'currencies_id' => 'int',
		'parent_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'name',
		'code',
		'locale',
		'charset',
		'date_format_short',
		'date_format_long',
		'time_format',
		'text_direction',
		'currencies_id',
		'numeric_separator_decimal',
		'numeric_separator_thousands',
		'parent_id',
		'sort_order'
	];

	public function osc_currency()
	{
		return $this->belongsTo(\OSC\Models\OscCurrency::class, 'currencies_id');
	}

	public function osc_categories_descriptions()
	{
		return $this->hasMany(\OSC\Models\OscCategoriesDescription::class, 'language_id');
	}

	public function osc_languages_definitions()
	{
		return $this->hasMany(\OSC\Models\OscLanguagesDefinition::class, 'languages_id');
	}

	public function osc_manufacturers_infos()
	{
		return $this->hasMany(\OSC\Models\OscManufacturersInfo::class, 'languages_id');
	}

	public function osc_orders_statuses()
	{
		return $this->hasMany(\OSC\Models\OscOrdersStatus::class, 'language_id');
	}

	public function osc_orders_transactions_statuses()
	{
		return $this->hasMany(\OSC\Models\OscOrdersTransactionsStatus::class, 'language_id');
	}

	public function osc_product_attributes()
	{
		return $this->hasMany(\OSC\Models\OscProductAttribute::class, 'languages_id');
	}

	public function osc_products_descriptions()
	{
		return $this->hasMany(\OSC\Models\OscProductsDescription::class, 'language_id');
	}

	public function osc_products_images_groups()
	{
		return $this->hasMany(\OSC\Models\OscProductsImagesGroup::class, 'language_id');
	}

	public function osc_products_variants_groups()
	{
		return $this->hasMany(\OSC\Models\OscProductsVariantsGroup::class, 'languages_id');
	}

	public function osc_products_variants_values()
	{
		return $this->hasMany(\OSC\Models\OscProductsVariantsValue::class, 'languages_id');
	}

	public function osc_reviews()
	{
		return $this->hasMany(\OSC\Models\OscReview::class, 'languages_id');
	}

	public function osc_shipping_availabilities()
	{
		return $this->hasMany(\OSC\Models\OscShippingAvailability::class, 'languages_id');
	}

	public function osc_weight_classes()
	{
		return $this->hasMany(\OSC\Models\OscWeightClass::class, 'language_id');
	}
}
