<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model {

	protected $table = 'group_user';
	
	protected $fillable = ['name',
							'branch_id',
							'status',
							'remark',
							'create_by_id'
							];

	public $timestamps = false;
	
	
	public function origin_office(){
		return $this->belongsTo('App\Models\Admin\OriginOffice','branch_id');
	}
	
	public function user(){
		return $this->belongsTo('App\Models\Admin\UserModel','create_by_id');
	}
	
}
