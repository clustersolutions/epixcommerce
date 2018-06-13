<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersStatusHistory
 * 
 * @property int $orders_status_history_id
 * @property int $orders_id
 * @property int $orders_status_id
 * @property \Carbon\Carbon $date_added
 * @property int $customer_notified
 * @property string $comments
 * 
 * @property \OSC\Models\OscOrder $osc_order
 * @property \OSC\Models\OscOrdersStatus $osc_orders_status
 *
 * @package OSC\Models
 */
class OscOrdersStatusHistory extends Eloquent
{
	protected $table = 'osc_orders_status_history';
	protected $primaryKey = 'orders_status_history_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'orders_status_id' => 'int',
		'customer_notified' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'orders_id',
		'orders_status_id',
		'date_added',
		'customer_notified',
		'comments'
	];

	public function osc_order()
	{
		return $this->belongsTo(\OSC\Models\OscOrder::class, 'orders_id');
	}

	public function osc_orders_status()
	{
		return $this->belongsTo(\OSC\Models\OscOrdersStatus::class, 'orders_status_id');
	}
}
