<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscSpecial
 * 
 * @property int $specials_id
 * @property int $products_id
 * @property float $specials_new_products_price
 * @property \Carbon\Carbon $specials_date_added
 * @property \Carbon\Carbon $specials_last_modified
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $expires_date
 * @property \Carbon\Carbon $date_status_change
 * @property int $status
 * 
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscSpecial extends Eloquent
{
	protected $primaryKey = 'specials_id';
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'specials_new_products_price' => 'float',
		'status' => 'int'
	];

	protected $dates = [
		'specials_date_added',
		'specials_last_modified',
		'start_date',
		'expires_date',
		'date_status_change'
	];

	protected $fillable = [
		'products_id',
		'specials_new_products_price',
		'specials_date_added',
		'specials_last_modified',
		'start_date',
		'expires_date',
		'date_status_change',
		'status'
	];

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}
}
