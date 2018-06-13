<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscTemplatesBoxesToPage
 * 
 * @property int $id
 * @property int $templates_boxes_id
 * @property int $templates_id
 * @property string $content_page
 * @property string $boxes_group
 * @property int $sort_order
 * @property int $page_specific
 * 
 * @property \OSC\Models\OscTemplatesBox $osc_templates_box
 * @property \OSC\Models\OscTemplate $osc_template
 *
 * @package OSC\Models
 */
class OscTemplatesBoxesToPage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'templates_boxes_id' => 'int',
		'templates_id' => 'int',
		'sort_order' => 'int',
		'page_specific' => 'int'
	];

	protected $fillable = [
		'templates_boxes_id',
		'templates_id',
		'content_page',
		'boxes_group',
		'sort_order',
		'page_specific'
	];

	public function osc_templates_box()
	{
		return $this->belongsTo(\OSC\Models\OscTemplatesBox::class, 'templates_boxes_id');
	}

	public function osc_template()
	{
		return $this->belongsTo(\OSC\Models\OscTemplate::class, 'templates_id');
	}
}
