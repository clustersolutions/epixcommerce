<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCategoriesDescription
 * 
 * @property int $categories_id
 * @property int $language_id
 * @property string $categories_name
 * 
 * @property \OSC\Models\OscCategory $osc_category
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscCategoriesDescription extends Eloquent
{
	protected $table = 'osc_categories_description';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'categories_id' => 'int',
		'language_id' => 'int'
	];

	protected $fillable = [
		'categories_name'
	];

	public function osc_category()
	{
		return $this->belongsTo(\OSC\Models\OscCategory::class, 'categories_id');
	}

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'language_id');
	}
}
