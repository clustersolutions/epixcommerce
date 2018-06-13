<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscActionRecorder
 * 
 * @property int $id
 * @property string $site
 * @property string $application
 * @property string $actions
 * @property string $action
 * @property int $ip_address
 * @property string $success
 * @property int $user_id
 * @property string $identifier
 * @property string $result
 * @property string $user_agent
 * @property \Carbon\Carbon $date_added
 *
 * @package OSC\Models
 */
class OscActionRecorder extends Eloquent
{
	protected $table = 'osc_action_recorder';
	public $timestamps = false;

	protected $casts = [
		'ip_address' => 'int',
		'user_id' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'site',
		'application',
		'actions',
		'action',
		'ip_address',
		'success',
		'user_id',
		'identifier',
		'result',
		'user_agent',
		'date_added'
	];
}
