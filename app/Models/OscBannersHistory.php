<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscBannersHistory
 * 
 * @property int $banners_history_id
 * @property int $banners_id
 * @property int $banners_shown
 * @property int $banners_clicked
 * @property \Carbon\Carbon $banners_history_date
 * 
 * @property \OSC\Models\OscBanner $osc_banner
 *
 * @package OSC\Models
 */
class OscBannersHistory extends Eloquent
{
	protected $table = 'osc_banners_history';
	protected $primaryKey = 'banners_history_id';
	public $timestamps = false;

	protected $casts = [
		'banners_id' => 'int',
		'banners_shown' => 'int',
		'banners_clicked' => 'int'
	];

	protected $dates = [
		'banners_history_date'
	];

	protected $fillable = [
		'banners_id',
		'banners_shown',
		'banners_clicked',
		'banners_history_date'
	];

	public function osc_banner()
	{
		return $this->belongsTo(\OSC\Models\OscBanner::class, 'banners_id');
	}
}
