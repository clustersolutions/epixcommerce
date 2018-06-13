<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscAuditLog
 * 
 * @property int $id
 * @property string $site
 * @property string $application
 * @property string $action
 * @property int $row_id
 * @property int $user_id
 * @property int $ip_address
 * @property string $action_type
 * @property \Carbon\Carbon $date_added
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_audit_log_rows
 *
 * @package OSC\Models
 */
class OscAuditLog extends Eloquent
{
	protected $table = 'osc_audit_log';
	public $timestamps = false;

	protected $casts = [
		'row_id' => 'int',
		'user_id' => 'int',
		'ip_address' => 'int'
	];

	protected $dates = [
		'date_added'
	];

	protected $fillable = [
		'site',
		'application',
		'action',
		'row_id',
		'user_id',
		'ip_address',
		'action_type',
		'date_added'
	];

	public function osc_audit_log_rows()
	{
		return $this->hasMany(\OSC\Models\OscAuditLogRow::class, 'audit_log_id');
	}
}
