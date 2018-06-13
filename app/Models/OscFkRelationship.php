<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscFkRelationship
 * 
 * @property int $fk_id
 * @property string $from_table
 * @property string $to_table
 * @property string $from_field
 * @property string $to_field
 * @property string $on_update
 * @property string $on_delete
 *
 * @package OSC\Models
 */
class OscFkRelationship extends Eloquent
{
	protected $primaryKey = 'fk_id';
	public $timestamps = false;

	protected $fillable = [
		'from_table',
		'to_table',
		'from_field',
		'to_field',
		'on_update',
		'on_delete'
	];
}
