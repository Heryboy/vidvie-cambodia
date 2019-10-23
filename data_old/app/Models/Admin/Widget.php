<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
	protected $table = 'widget';
	protected $fillable = ['image', 
	 					    'layout_possition',
	 					    'ordering',
							'is_active',
							'is_html',
							'display_title',
							'created_by',
							'updated_by',						
	];
	
	public $timestamps = false;
	
	
	
}
