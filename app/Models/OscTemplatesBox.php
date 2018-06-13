<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscTemplatesBox
 * 
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $author_name
 * @property string $author_www
 * @property string $modules_group
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_templates_boxes_to_pages
 *
 * @package OSC\Models
 */
class OscTemplatesBox extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'title',
		'code',
		'author_name',
		'author_www',
		'modules_group'
	];

	public function osc_templates_boxes_to_pages()
	{
		return $this->hasMany(\OSC\Models\OscTemplatesBoxesToPage::class, 'templates_boxes_id');
	}
}
