<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	protected $table = 'member';
	protected $fillable = ['name','company_representative','image','member_type_id','business_type_id','position_id','base_country','website','phone','address','email','description','remark','modified_by'];
 
	public $timestamps = true;
	
	public function MemberType(){
		return $this->belongsTo('App\Models\Admin\MemberType','member_type_id');
	}

	public function BusinessType(){
		return $this->belongsTo('App\Models\Admin\BusinessType','business_type_id');
	}

	public function Position(){
		return $this->belongsTo('App\Models\Admin\Position','position_id');
	}
}

