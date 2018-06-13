<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersProductsVariant
 * 
 * @property int $id
 * @property int $orders_id
 * @property int $orders_products_id
 * @property string $group_title
 * @property string $value_title
 * 
 * @property \OSC\Models\OscOrder $osc_order
 *
 * @package OSC\Models
 */
class OscOrdersProductsVariant extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'orders_products_id' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'orders_products_id',
		'group_title',
		'value_title'
	];

	public function osc_order()
	{
		return $this->belongsTo(\OSC\Models\OscOrder::class, 'orders_id');
	}
}
