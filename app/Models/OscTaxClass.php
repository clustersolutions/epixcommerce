<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscTaxClass
 * 
 * @property int $tax_class_id
 * @property string $tax_class_title
 * @property string $tax_class_description
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_added
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_products
 * @property \Illuminate\Database\Eloquent\Collection $osc_tax_rates
 *
 * @package OSC\Models
 */
class OscTaxClass extends Eloquent
{
	protected $table = 'osc_tax_class';
	protected $primaryKey = 'tax_class_id';
	public $timestamps = false;

	protected $dates = [
		'last_modified',
		'date_added'
	];

	protected $fillable = [
		'tax_class_title',
		'tax_class_description',
		'last_modified',
		'date_added'
	];

	public function osc_products()
	{
		return $this->hasMany(\OSC\Models\OscProduct::class, 'products_tax_class_id');
	}

	public function osc_tax_rates()
	{
		return $this->hasMany(\OSC\Models\OscTaxRate::class, 'tax_class_id');
	}
}
