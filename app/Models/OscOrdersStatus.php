<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersStatus
 * 
 * @property int $orders_status_id
 * @property int $language_id
 * @property string $orders_status_name
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_status_histories
 *
 * @package OSC\Models
 */
class OscOrdersStatus extends Eloquent
{
	protected $table = 'osc_orders_status';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'orders_status_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'orders_status_name'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'language_id');
	}

	public function osc_orders()
	{
		return $this->hasMany(\OSC\Models\OscOrder::class, 'orders_status');
	}

	public function osc_orders_status_histories()
	{
		return $this->hasMany(\OSC\Models\OscOrdersStatusHistory::class, 'orders_status_id');
	}
}
