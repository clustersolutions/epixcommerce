<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscAddressBook
 * 
 * @property int $address_book_id
 * @property int $customers_id
 * @property string $entry_gender
 * @property string $entry_company
 * @property string $entry_firstname
 * @property string $entry_lastname
 * @property string $entry_street_address
 * @property string $entry_suburb
 * @property string $entry_postcode
 * @property string $entry_city
 * @property string $entry_state
 * @property int $entry_country_id
 * @property int $entry_zone_id
 * @property string $entry_telephone
 * @property string $entry_fax
 * 
 * @property \OSC\Models\OscCountry $osc_country
 * @property \OSC\Models\OscCustomer $osc_customer
 * @property \OSC\Models\OscZone $osc_zone
 * @property \Illuminate\Database\Eloquent\Collection $osc_customers
 *
 * @package OSC\Models
 */
class OscAddressBook extends Eloquent
{
	protected $table = 'osc_address_book';
	protected $primaryKey = 'address_book_id';
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'entry_country_id' => 'int',
		'entry_zone_id' => 'int'
	];

	protected $fillable = [
		'customers_id',
		'entry_gender',
		'entry_company',
		'entry_firstname',
		'entry_lastname',
		'entry_street_address',
		'entry_suburb',
		'entry_postcode',
		'entry_city',
		'entry_state',
		'entry_country_id',
		'entry_zone_id',
		'entry_telephone',
		'entry_fax'
	];

	public function osc_country()
	{
		return $this->belongsTo(\OSC\Models\OscCountry::class, 'entry_country_id');
	}

	public function osc_customer()
	{
		return $this->belongsTo(\OSC\Models\OscCustomer::class, 'customers_id');
	}

	public function osc_zone()
	{
		return $this->belongsTo(\OSC\Models\OscZone::class, 'entry_zone_id');
	}

	public function osc_customers()
	{
		return $this->hasMany(\OSC\Models\OscCustomer::class, 'customers_default_address_id');
	}
}
