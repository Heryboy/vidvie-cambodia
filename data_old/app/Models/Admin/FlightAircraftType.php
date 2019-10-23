<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightAircraftType extends Model {

	protected $table = 'flight_aircraft_type';
	
	protected $fillable = ['name','is_active'];

	public $timestamps = false;

}
