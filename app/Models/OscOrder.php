<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrder
 * 
 * @property int $orders_id
 * @property int $customers_id
 * @property string $customers_name
 * @property string $customers_company
 * @property string $customers_street_address
 * @property string $customers_suburb
 * @property string $customers_city
 * @property string $customers_postcode
 * @property string $customers_state
 * @property string $customers_state_code
 * @property string $customers_country
 * @property string $customers_country_iso2
 * @property string $customers_country_iso3
 * @property string $customers_telephone
 * @property string $customers_email_address
 * @property string $customers_address_format
 * @property string $customers_ip_address
 * @property string $delivery_name
 * @property string $delivery_company
 * @property string $delivery_street_address
 * @property string $delivery_suburb
 * @property string $delivery_city
 * @property string $delivery_postcode
 * @property string $delivery_state
 * @property string $delivery_state_code
 * @property string $delivery_country
 * @property string $delivery_country_iso2
 * @property string $delivery_country_iso3
 * @property string $delivery_address_format
 * @property string $billing_name
 * @property string $billing_company
 * @property string $billing_street_address
 * @property string $billing_suburb
 * @property string $billing_city
 * @property string $billing_postcode
 * @property string $billing_state
 * @property string $billing_state_code
 * @property string $billing_country
 * @property string $billing_country_iso2
 * @property string $billing_country_iso3
 * @property string $billing_address_format
 * @property string $payment_method
 * @property string $payment_module
 * @property \Carbon\Carbon $last_modified
 * @property \Carbon\Carbon $date_purchased
 * @property int $orders_status
 * @property \Carbon\Carbon $orders_date_finished
 * @property string $currency
 * @property float $currency_value
 * 
 * @property \OSC\Models\OscOrdersStatus $osc_orders_status
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_products
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_products_downloads
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_products_variants
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_status_histories
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_totals
 * @property \Illuminate\Database\Eloquent\Collection $osc_orders_transactions_histories
 *
 * @package OSC\Models
 */
class OscOrder extends Eloquent
{
	protected $primaryKey = 'orders_id';
	public $timestamps = false;

	protected $casts = [
		'customers_id' => 'int',
		'orders_status' => 'int',
		'currency_value' => 'float'
	];

	protected $dates = [
		'last_modified',
		'date_purchased',
		'orders_date_finished'
	];

	protected $fillable = [
		'customers_id',
		'customers_name',
		'customers_company',
		'customers_street_address',
		'customers_suburb',
		'customers_city',
		'customers_postcode',
		'customers_state',
		'customers_state_code',
		'customers_country',
		'customers_country_iso2',
		'customers_country_iso3',
		'customers_telephone',
		'customers_email_address',
		'customers_address_format',
		'customers_ip_address',
		'delivery_name',
		'delivery_company',
		'delivery_street_address',
		'delivery_suburb',
		'delivery_city',
		'delivery_postcode',
		'delivery_state',
		'delivery_state_code',
		'delivery_country',
		'delivery_country_iso2',
		'delivery_country_iso3',
		'delivery_address_format',
		'billing_name',
		'billing_company',
		'billing_street_address',
		'billing_suburb',
		'billing_city',
		'billing_postcode',
		'billing_state',
		'billing_state_code',
		'billing_country',
		'billing_country_iso2',
		'billing_country_iso3',
		'billing_address_format',
		'payment_method',
		'payment_module',
		'last_modified',
		'date_purchased',
		'orders_status',
		'orders_date_finished',
		'currency',
		'currency_value'
	];

	public function osc_orders_status()
	{
		return $this->belongsTo(\OSC\Models\OscOrdersStatus::class, 'orders_status');
	}

	public function osc_orders_products()
	{
		return $this->hasMany(\OSC\Models\OscOrdersProduct::class, 'orders_id');
	}

	public function osc_orders_products_downloads()
	{
		return $this->hasMany(\OSC\Models\OscOrdersProductsDownload::class, 'orders_id');
	}

	public function osc_orders_products_variants()
	{
		return $this->hasMany(\OSC\Models\OscOrdersProductsVariant::class, 'orders_id');
	}

	public function osc_orders_status_histories()
	{
		return $this->hasMany(\OSC\Models\OscOrdersStatusHistory::class, 'orders_id');
	}

	public function osc_orders_totals()
	{
		return $this->hasMany(\OSC\Models\OscOrdersTotal::class, 'orders_id');
	}

	public function osc_orders_transactions_histories()
	{
		return $this->hasMany(\OSC\Models\OscOrdersTransactionsHistory::class, 'orders_id');
	}
}
