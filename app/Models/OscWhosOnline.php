<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscWhosOnline
 * 
 * @property int $id
 * @property int $customer_id
 * @property string $full_name
 * @property string $session_id
 * @property string $ip_address
 * @property string $time_entry
 * @property string $time_last_click
 * @property string $last_page_url
 * 
 * @property \OSC\Models\OscCustomer $osc_customer
 *
 * @package OSC\Models
 */
class OscWhosOnline extends Eloquent
{
	protected $table = 'osc_whos_online';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'full_name',
		'session_id',
		'ip_address',
		'time_entry',
		'time_last_click',
		'last_page_url'
	];

	public function osc_customer()
	{
		return $this->belongsTo(\OSC\Models\OscCustomer::class, 'customer_id');
	}
}
