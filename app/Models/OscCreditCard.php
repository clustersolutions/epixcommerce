<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscCreditCard
 * 
 * @property int $id
 * @property string $credit_card_name
 * @property string $pattern
 * @property string $credit_card_status
 * @property int $sort_order
 *
 * @package OSC\Models
 */
class OscCreditCard extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'sort_order' => 'int'
	];

	protected $fillable = [
		'credit_card_name',
		'pattern',
		'credit_card_status',
		'sort_order'
	];
}
