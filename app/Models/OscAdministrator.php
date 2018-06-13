<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscAdministrator
 * 
 * @property int $id
 * @property string $user_name
 * @property string $user_password
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_administrator_shortcuts
 * @property \Illuminate\Database\Eloquent\Collection $osc_administrators_accesses
 *
 * @package OSC\Models
 */
class OscAdministrator extends Eloquent
{
	public $timestamps = false;

	protected $hidden = [
		'user_password'
	];

	protected $fillable = [
		'user_name',
		'user_password'
	];

	public function osc_administrator_shortcuts()
	{
		return $this->hasMany(\OSC\Models\OscAdministratorShortcut::class, 'administrators_id');
	}

	public function osc_administrators_accesses()
	{
		return $this->hasMany(\OSC\Models\OscAdministratorsAccess::class, 'administrators_id');
	}
}
