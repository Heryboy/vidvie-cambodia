<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightDestination extends Model {

	protected $table = 'flight_destination';
	
	protected $fillable = ['name','is_active'];

	public $timestamps = false;

}
