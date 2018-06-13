<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscModule
 * 
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $author_name
 * @property string $author_www
 * @property string $modules_group
 *
 * @package OSC\Models
 */
class OscModule extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'code',
		'author_name',
		'author_www',
		'modules_group'
	];
}
