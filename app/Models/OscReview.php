<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscReview
 * 
 * @property int $reviews_id
 * @property int $products_id
 * @property int $customers_id
 * @property string $customers_name
 * @property int $reviews_rating
 * @property int $languages_id
 * @property string $reviews_text
 * @property \Carbon\Carbon $date_added
 * @property \Carbon\Carbon $last_modified
 * @property int $reviews_read
 * @property bool $reviews_status
 * 
 * @property \OSC\Models\OscCustomer $osc_customer
 * @property \OSC\Models\OscLanguage $osc_language
 * @property \OSC\Models\OscProduct $osc_product
 *
 * @package OSC\Models
 */
class OscReview extends Eloquent
{
	protected $primaryKey = 'reviews_id';
	public $timestamps = false;

	protected $casts = [
		'products_id' => 'int',
		'customers_id' => 'int',
		'reviews_rating' => 'int',
		'languages_id' => 'int',
		'reviews_read' => 'int',
		'reviews_status' => 'bool'
	];

	protected $dates = [
		'date_added',
		'last_modified'
	];

	protected $fillable = [
		'products_id',
		'customers_id',
		'customers_name',
		'reviews_rating',
		'languages_id',
		'reviews_text',
		'date_added',
		'last_modified',
		'reviews_read',
		'reviews_status'
	];

	public function osc_customer()
	{
		return $this->belongsTo(\OSC\Models\OscCustomer::class, 'customers_id');
	}

	public function osc_language()
	{
		return $this->belongsTo(\OSC\Models\OscLanguage::class, 'languages_id');
	}

	public function osc_product()
	{
		return $this->belongsTo(\OSC\Models\OscProduct::class, 'products_id');
	}
}
