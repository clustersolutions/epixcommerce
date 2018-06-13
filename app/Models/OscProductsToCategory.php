<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsToCategory
 * 
 * @property int $products_id
 * @property int $categories_id
 * 
 * @property \OSC\Models\OscCategory $osc_category
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscProductsToCategory extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'categories_id' => 'int'
	];

	public function osc_category()
	{
		return $this->belongsTo(\OSC\Models\OscCategory::class, 'categories_id');
	}

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}
}
