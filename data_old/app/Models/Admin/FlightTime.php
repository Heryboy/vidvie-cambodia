<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightTime extends Model {

	protected $table = 'flight_time';
	
	protected $fillable = ['time','is_active'];

	public $timestamps = false;

}
