<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	protected $table = 'content';
	
	protected $fillable = [ 
	 					    'fmenu_id',
	 					    'menu_type_id',
	 					    'ordering',
							'is_active',
							'created_by',
							'updated_by',						
	];

	public function content_category(){
		return $this->hasmany('App\Models\Admin\content_category','content_category_id');
	}
	
}
