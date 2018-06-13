<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscSession
 * 
 * @property string $id
 * @property int $expiry
 * @property string $value
 *
 * @package OSC\Models
 */
class OscSession extends Eloquent
{
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'expiry' => 'int'
	];

	protected $fillable = [
		'expiry',
		'value'
	];
}
