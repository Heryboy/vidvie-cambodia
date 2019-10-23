<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
	protected $table = 'career';
	protected $guarded = [];
	protected $fillable = [
							'image',
							'report_to',
							'job_code',
							'is_active',
							'created_at',
							'updated_at'
						  ];
						  
	public $timestamps = false;
	// public function config_group(){
	// 	return $this->belongsTo('App\Models\Admin\ConfigGroup','config_group_id','id');
	// }
}
