<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightOrigin extends Model {

	protected $table = 'flight_origin';
	
	protected $fillable = ['name','is_active'];

	public $timestamps = false;

}
