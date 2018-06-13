<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscShoppingCart
 * 
 * @property int $id
 * @property int $customers_id
 * @property int $item_id
 * @property int $products_id
 * @property int $quantity
 * @property \Carbon\Carbon $date_added
 * 
 * @property \OSC\Models\OscCustomer $osc_customer
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscShoppingCart extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'item_id' => 'int',
		'products_id' => 'int',
		'quantity' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'customers_id',
		'item_id',
		'products_id',
		'quantity',
		'date_added'
	];

	public function osc_customer()
	{
		return $this->belongsTo(\OSC\Models\OscCustomer::class, 'customers_id');
	}

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}
}
