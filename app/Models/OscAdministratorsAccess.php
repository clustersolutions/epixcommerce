<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscAdministratorsAccess
 * 
 * @property int $administrators_id
 * @property string $module
 * 
 * @property \OSC\Models\OscAdministrator $osc_administrator
 *
 * @package OSC\Models
 */
class OscAdministratorsAccess extends Eloquent
{
	protected $table = 'osc_administrators_access';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'administrators_id' => 'int'
	];

	public function osc_administrator()
	{
		return $this->belongsTo(\OSC\Models\OscAdministrator::class, 'administrators_id');
	}
}
