<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCustomer
 * 
 * @property int $customers_id
 * @property string $customers_gender
 * @property string $customers_firstname
 * @property string $customers_lastname
 * @property \Carbon\Carbon $customers_dob
 * @property string $customers_email_address
 * @property int $customers_default_address_id
 * @property string $customers_telephone
 * @property string $customers_fax
 * @property string $customers_password
 * @property string $customers_newsletter
 * @property int $customers_status
 * @property string $customers_ip_address
 * @property \Carbon\Carbon $date_last_logon
 * @property int $number_of_logons
 * @property \Carbon\Carbon $date_account_created
 * @property \Carbon\Carbon $date_account_last_modified
 * @property int $global_product_notifications
 * 
 * @property \OSC\Models\OscAddressBook $osc_address_book
 * @property \Illuminate\Database\Eloquent\Collection $osc_address_books
 * @property \Illuminate\Database\Eloquent\Collection $osc_products_notifications
 * @property \Illuminate\Database\Eloquent\Collection $osc_reviews
 * @property \Illuminate\Database\Eloquent\Collection $osc_shopping_carts
 * @property \Illuminate\Database\Eloquent\Collection $osc_shopping_carts_custom_variants_values
 * @property \Illuminate\Database\Eloquent\Collection $osc_whos_onlines
 *
 * @package OSC\Models
 */
class OscCustomer extends Eloquent
{
	protected $primaryKey = 'customers_id';
	public $timestamps = false;

	protected $casts = [
		'customers_default_address_id' => 'int',
		'customers_status' => 'int',
		'number_of_logons' => 'int',
		'global_product_notifications' => 'int'
	];

	protected $dates = [
		'customers_dob',
		'date_last_logon',
		'date_account_created',
		'date_account_last_modified'
	];

	protected $hidden = [
		'customers_password'
	];

	protected $fillable = [
		'customers_gender',
		'customers_firstname',
		'customers_lastname',
		'customers_dob',
		'customers_email_address',
		'customers_default_address_id',
		'customers_telephone',
		'customers_fax',
		'customers_password',
		'customers_newsletter',
		'customers_status',
		'customers_ip_address',
		'date_last_logon',
		'number_of_logons',
		'date_account_created',
		'date_account_last_modified',
		'global_product_notifications'
	];

	public function osc_address_book()
	{
		return $this->belongsTo(\OSC\Models\OscAddressBook::class, 'customers_default_address_id');
	}

	public function osc_address_books()
	{
		return $this->hasMany(\OSC\Models\OscAddressBook::class, 'customers_id');
	}

	public function osc_products_notifications()
	{
		return $this->hasMany(\OSC\Models\OscProductsNotification::class, 'customers_id');
	}

	public function osc_reviews()
	{
		return $this->hasMany(\OSC\Models\OscReview::class, 'customers_id');
	}

	public function osc_shopping_carts()
	{
		return $this->hasMany(\OSC\Models\OscShoppingCart::class, 'customers_id');
	}

	public function osc_shopping_carts_custom_variants_values()
	{
		return $this->hasMany(\OSC\Models\OscShoppingCartsCustomVariantsValue::class, 'customers_id');
	}

	public function osc_whos_onlines()
	{
		return $this->hasMany(\OSC\Models\OscWhosOnline::class, 'customer_id');
	}
}
