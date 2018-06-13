<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersTotal
 * 
 * @property int $orders_total_id
 * @property int $orders_id
 * @property string $title
 * @property string $text
 * @property float $value
 * @property string $class
 * @property int $sort_order
 * 
 * @property \OSC\Models\OscOrder $osc_order
 *
 * @package OSC\Models
 */
class OscOrdersTotal extends Eloquent
{
	protected $table = 'osc_orders_total';
	protected $primaryKey = 'orders_total_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'value' => 'float',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'title',
		'text',
		'value',
		'class',
		'sort_order'
	];

	public function osc_order()
	{
		return $this->belongsTo(\OSC\Models\OscOrder::class, 'orders_id');
	}
}
