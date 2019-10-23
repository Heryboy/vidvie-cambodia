<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class QuickLink extends Model {

	protected $table = 'quicklink';
	
	protected $fillable = ['thumbnail','url','is_active'];

	public $timestamps = false;
	
	
	// public function group_user(){
	// 	return $this->belongsTo('App\Models\Admin\GroupUser','group_id');
	// }

}
