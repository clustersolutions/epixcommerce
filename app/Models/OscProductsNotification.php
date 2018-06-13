<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsNotification
 * 
 * @property int $products_id
 * @property int $customers_id
 * @property \Carbon\Carbon $date_added
 * 
 * @property \OSC\Models\OscCustomer $osc_customer
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscProductsNotification extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'customers_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
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
