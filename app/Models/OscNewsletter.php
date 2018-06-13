<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscNewsletter
 * 
 * @property int $newsletters_id
 * @property string $title
 * @property string $content
 * @property string $module
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_sent
 * @property int $status
 * @property int $locked
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_newsletters_logs
 *
 * @package OSC\Models
 */
class OscNewsletter extends Eloquent
{
	protected $primaryKey = 'newsletters_id';
	public $timestamps = false;

	protected $casts = [
		'status' => 'int',
		'locked' => 'int'
	];

	protected $dates = [
		'date_added',
		'date_sent'
	];

	protected $fillable = [
		'title',
		'content',
		'module',
		'date_added',
		'date_sent',
		'status',
		'locked'
	];

	public function osc_newsletters_logs()
	{
		return $this->hasMany(\OSC\Models\OscNewslettersLog::class, 'newsletters_id');
	}
}
