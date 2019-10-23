<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
	protected $table = 'content_category';
	protected $fillable = ['parent_id', 
						    'ordering',
						    'image',
							'is_active'
							
	];
	
	//public $timestamps = false;
	
	public function Content(){
		return $this->belongsTo('App\Models\Admin\Content','content_category_id');
	}
	
}
