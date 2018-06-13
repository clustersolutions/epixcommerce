<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersProduct
 * 
 * @property int $orders_products_id
 * @property int $orders_id
 * @property int $products_id
 * @property string $products_model
 * @property string $products_name
 * @property float $products_price
 * @property float $products_tax
 * @property int $products_quantity
 * 
 * @property \OSC\Models\OscOrder $osc_order
 *
 * @package OSC\Models
 */
class OscOrdersProduct extends Eloquent
{
	protected $primaryKey = 'orders_products_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'products_id' => 'int',
		'products_price' => 'float',
		'products_tax' => 'float',
		'products_quantity' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'products_id',
		'products_model',
		'products_name',
		'products_price',
		'products_tax',
		'products_quantity'
	];

	public function osc_order()
	{
		return $this->belongsTo(\OSC\Models\OscOrder::class, 'orders_id');
	}
}
