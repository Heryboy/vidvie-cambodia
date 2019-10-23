<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Promotions extends Model {

	protected $table = 'promotions';
	
	protected $fillable = ['image','is_active','created_at','updated_at'];

	public $timestamps = false;


}
