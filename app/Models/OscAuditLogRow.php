<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscAuditLogRow
 * 
 * @property int $id
 * @property int $audit_log_id
 * @property string $row_key
 * @property string $old_value
 * @property string $new_value
 * 
 * @property \OSC\Models\OscAuditLog $osc_audit_log
 *
 * @package OSC\Models
 */
class OscAuditLogRow extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'audit_log_id' => 'int'
	];

	protected $fillable = [
		'audit_log_id',
		'row_key',
		'old_value',
		'new_value'
	];

	public function osc_audit_log()
	{
		return $this->belongsTo(\OSC\Models\OscAuditLog::class, 'audit_log_id');
	}
}
