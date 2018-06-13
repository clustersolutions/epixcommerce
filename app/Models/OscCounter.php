<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCounter
 * 
 * @property int $id
 * @property \Carbon\Carbon $startdate
 * @property int $counter
 *
 * @package OSC\Models
 */
class OscCounter extends Eloquent
{
	protected $table = 'osc_counter';
	public $timestamps = false;

	protected $casts = [
		'counter' => 'int'
	];

	protected $dates = [
		'startdate'
	];

	protected $fillable = [
		'startdate',
		'counter'
	];
}
