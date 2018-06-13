<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsImage
 * 
 * @property int $id
 * @property int $products_id
 * @property string $image
 * @property bool $default_flag
 * @property int $sort_order
 * @property \Carbon\Carbon $date_added
 * 
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscProductsImage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'default_flag' => 'bool',
		'sort_order' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'products_id',
		'image',
		'default_flag',
		'sort_order',
		'date_added'
	];

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}
}
