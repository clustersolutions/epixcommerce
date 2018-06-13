<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductsDescription
 * 
 * @property int $products_id
 * @property int $language_id
 * @property string $products_name
 * @property string $products_description
 * @property string $products_keyword
 * @property string $products_tags
 * @property string $products_url
 * @property int $products_viewed
 * 
 * @property \OSC\Models\OscProduct $osc_product
 * @property \OSC\Models\OscLanguage $osc_language
 *
 * @package OSC\Models
 */
class OscProductsDescription extends Eloquent
{
	protected $table = 'osc_products_description';
	public $timestamps = false;

	protected $casts = [
		'language_id' => 'int',
		'products_viewed' => 'int'
	];

	protected $fillable = [
		'products_name',
		'products_description',
		'products_keyword',
		'products_tags',
		'products_url',
		'products_viewed'
	];

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'language_id');
	}
}
