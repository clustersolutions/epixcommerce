<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscOrdersProductsDownload
 * 
 * @property int $orders_products_download_id
 * @property int $orders_id
 * @property int $orders_products_id
 * @property string $orders_products_filename
 * @property int $download_maxdays
 * @property int $download_count
 * 
 * @property \OSC\Models\OscOrder $osc_order
 *
 * @package OSC\Models
 */
class OscOrdersProductsDownload extends Eloquent
{
	protected $table = 'osc_orders_products_download';
	protected $primaryKey = 'orders_products_download_id';
	public $timestamps = false;

	protected $casts = [
		'orders_id' => 'int',
		'orders_products_id' => 'int',
		'download_maxdays' => 'int',
		'download_count' => 'int'
	];

	protected $fillable = [
		'orders_id',
		'orders_products_id',
		'orders_products_filename',
		'download_maxdays',
		'download_count'
	];

	public function osc_order()
	{
		return $this->belongsTo(\OSC\Models\OscOrder::class, 'orders_id');
	}
}
