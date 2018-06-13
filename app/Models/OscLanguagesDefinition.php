<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscLanguagesDefinition
 * 
 * @property int $id
 * @property int $languages_id
 * @property string $content_group
 * @property string $definition_key
 * @property string $definition_value
 * 
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscLanguagesDefinition extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'languages_id' => 'int'
	];

	protected $fillable = [
		'languages_id',
		'content_group',
		'definition_key',
		'definition_value'
	];

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}
}
