<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightType extends Model {

	protected $table = 'flight_type';
	
	protected $fillable = ['name','is_active'];

	public $timestamps = false;

}
