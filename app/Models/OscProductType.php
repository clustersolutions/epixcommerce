<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductType
 * 
 * @property int $id
 * @property string $title
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_product_types_assignments
 * @property \Illuminate\Database\Eloquent\Collection $osc_products
 *
 * @package OSC\Models
 */
class OscProductType extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title'
	];

	public function osc_product_types_assignments()
	{
		return $this->hasMany(\OSC\Models\OscProductTypesAssignment::class, 'types_id');
	}

	public function osc_products()
	{
		return $this->hasMany(\OSC\Models\OscProduct::class, 'products_types_id');
	}
}
