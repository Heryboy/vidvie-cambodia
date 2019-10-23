<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	//
	protected $table = 'payment';
	protected $guarded  = [];
	public $timestamps = false;
	
	public function payment_details(){
		return $this->hasMany('App\Models\Admin\PaymentDetail','payment_id');
	}
}
