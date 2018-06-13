<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersTransactionsHistory
 * 
 * @property int $id
 * @property int $orders_id
 * @property int $transaction_code
 * @property string $transaction_return_value
 * @property int $transaction_return_status
 * @property \Carbon\Carbon $date_added
 * 
 * @property \OSC\Models\OscOrder $osc_order
 *
 * @package OSC\Models
 */
class OscOrdersTransactionsHistory extends Eloquent
{
	protected $table = 'osc_orders_transactions_history';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'transaction_code' => 'int',
		'transaction_return_status' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'orders_id',
		'transaction_code',
		'transaction_return_value',
		'transaction_return_status',
		'date_added'
	];

	public function osc_order()
	{
		return $this->belongsTo(\OSC\Models\OscOrder::class, 'orders_id');
	}
}
