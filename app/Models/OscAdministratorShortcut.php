<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscAdministratorShortcut
 * 
 * @property int $administrators_id
 * @property string $module
 * @property \Carbon\Carbon $last_viewed
 * 
 * @property \OSC\Models\OscAdministrator $osc_administrator
 *
 * @package OSC\Models
 */
class OscAdministratorShortcut extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'administrators_id' => 'int'
	];

	protected $dates = [
		'last_viewed'
	];

	protected $fillable = [
		'last_viewed'
	];

	public function osc_administrator()
	{
		return $this->belongsTo(\OSC\Models\OscAdministrator::class, 'administrators_id');
	}
}
