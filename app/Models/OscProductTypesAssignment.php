<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscProductTypesAssignment
 * 
 * @property int $id
 * @property int $types_id
 * @property string $action
 * @property string $module
 * @property int $sort_order
 * 
 * @property \OSC\Models\OscProductType $osc_product_type
 *
 * @package OSC\Models
 */
class OscProductTypesAssignment extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'types_id' => 'int',
		'sort_order' => 'int'
	];

	protected $fillable = [
		'types_id',
		'action',
		'module',
		'sort_order'
	];

	public function osc_product_type()
	{
		return $this->belongsTo(\OSC\Models\OscProductType::class, 'types_id');
	}
}
