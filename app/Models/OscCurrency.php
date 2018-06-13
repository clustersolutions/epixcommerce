<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCurrency
 * 
 * @property int $currencies_id
 * @property string $title
 * @property string $code
 * @property string $symbol_left
 * @property string $symbol_right
 * @property string $decimal_places
 * @property float $value
 * @property \Carbon\Carbon $last_updated
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_languages
 *
 * @package OSC\Models
 */
class OscCurrency extends Eloquent
{
	protected $primaryKey = 'currencies_id';
	public $timestamps = false;

	protected $casts = [
		'value' => 'float'
	];

	protected $dates = [
		'last_updated'
	];

	protected $fillable = [
		'title',
		'code',
		'symbol_left',
		'symbol_right',
		'decimal_places',
		'value',
		'last_updated'
	];

	public function osc_languages()
	{
		return $this->hasMany(\OSC\Models\OscLanguage::class, 'currencies_id');
	}
}
