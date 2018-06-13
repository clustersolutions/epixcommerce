<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscBanner
 * 
 * @property int $banners_id
 * @property string $banners_title
 * @property string $banners_url
 * @property string $banners_image
 * @property string $banners_group
 * @property string $banners_html_text
 * @property int $expires_impressions
 * @property \Carbon\Carbon $expires_date
 * @property \Carbon\Carbon $date_scheduled
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $date_status_change
 * @property int $status
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_banners_histories
 *
 * @package OSC\Models
 */
class OscBanner extends Eloquent
{
	protected $primaryKey = 'banners_id';
	public $timestamps = false;

	protected $casts = [
		'expires_impressions' => 'int',
		'status' => 'int'
	];

	protected $dates = [
		'expires_date',
		'date_scheduled',
		'date_added',
		'date_status_change'
	];

	protected $fillable = [
		'banners_title',
		'banners_url',
		'banners_image',
		'banners_group',
		'banners_html_text',
		'expires_impressions',
		'expires_date',
		'date_scheduled',
		'date_added',
		'date_status_change',
		'status'
	];

	public function osc_banners_histories()
	{
		return $this->hasMany(\OSC\Models\OscBannersHistory::class, 'banners_id');
	}
}
