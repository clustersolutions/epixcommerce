<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCategory
 * 
 * @property int $categories_id
 * @property string $categories_image
 * @property int $parent_id
 * @property int $sort_order
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 * 
 * @property \OSC\Models\OscCategory $osc_category
 * @property \Illuminate\Database\Eloquent\Collection $osc_categories
 * @property \Illuminate\Database\Eloquent\Collection $osc_categories_descriptions
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_to_categories
 *
 * @package OSC\Models
 */
class OscCategory extends Eloquent
{
	protected $primaryKey = 'categories_id';
	public $timestamps = false;

	protected $casts = [
		'parent_id' => 'int',
		'sort_order' => 'int'
	];

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'categories_image',
		'parent_id',
		'sort_order',
		'date_added',
		'last_modified'
	];

	public function osc_category()
	{
		return $this->belongsTo(\OSC\Models\OscCategory::class, 'parent_id');
	}

	public function osc_categories()
	{
		return $this->hasMany(\OSC\Models\OscCategory::class, 'parent_id');
	}

	public function osc_categories_descriptions()
	{
		return $this->hasMany(\OSC\Models\OscCategoriesDescription::class, 'categories_id');
	}

	public function osc_products_to_categories()
	{
		return $this->hasMany(\OSC\Models\OscProductsToCategory::class, 'categories_id');
	}
}
