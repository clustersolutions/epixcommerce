<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscNewslettersLog
 * 
 * @property int $id
 * @property int $newsletters_id
 * @property string $email_address
 * @property \Carbon\Carbon $date_sent
 * 
 * @property \OSC\Models\OscNewsletter $osc_newsletter
 *
 * @package OSC\Models
 */
class OscNewslettersLog extends Eloquent
{
	protected $table = 'osc_newsletters_log';
	public $timestamps = false;

	protected $casts = [
		'newsletters_id' => 'int'
	];

	protected $dates = [
		'date_sent'
	];

	protected $fillable = [
		'newsletters_id',
		'email_address',
		'date_sent'
	];

	public function osc_newsletter()
	{
		return $this->belongsTo(\OSC\Models\OscNewsletter::class, 'newsletters_id');
	}
}
