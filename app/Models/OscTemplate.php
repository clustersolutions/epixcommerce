<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 09 Jun 2018 17:32:41 +0000.
 */

namespace OSC\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class OscTemplate
 * 
 * @property int $id
 * @property string $title
 * @property string $code
 * @property string $author_name
 * @property string $author_www
 * @property string $markup_version
 * @property int $css_based
 * @property string $medium
 * 
 * @property \Illuminate\Database\Eloquent\Collection $osc_templates_boxes_to_pages
 *
 * @package OSC\Models
 */
class OscTemplate extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'css_based' => 'int'
	];

	protected $fillable = [
		'title',
		'code',
		'author_name',
		'author_www',
		'markup_version',
		'css_based',
		'medium'
	];

	public function osc_templates_boxes_to_pages()
	{
		return $this->hasMany(\OSC\Models\OscTemplatesBoxesToPage::class, 'templates_id');
	}
}
