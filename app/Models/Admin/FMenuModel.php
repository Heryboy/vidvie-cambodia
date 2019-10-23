<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FMenuModel extends Model
{
	protected $table = 'fmenu';
	protected $fillable = ['parent_id', 
						    'menu_type_id',
						    'ordering',
						    'is_active',
							'url',
							'menu_link'
							
	];
	
	public $timestamps = false;
	
	public function FMenuType(){
		return $this->belongsTo('App\Models\Admin\MenuType','menu_type_id');
	}
	public function FmenuDescription(){
		//return $this->belongsTo('App\Models\Admin\FMenuDescription','fmenu_id');
	}
}
