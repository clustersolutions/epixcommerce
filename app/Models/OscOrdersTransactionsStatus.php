<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersTransactionsStatus
 * 
 * @property int $id
 * @property int $language_id
 * @property string $status_name
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscOrdersTransactionsStatus extends Eloquent
{
	protected $table = 'osc_orders_transactions_status';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'status_name'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'language_id');
	}
}
