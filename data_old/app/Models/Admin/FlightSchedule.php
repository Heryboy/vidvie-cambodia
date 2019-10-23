<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightSchedule extends Model {

	protected $table = 'flight_schedule';
	
	protected $fillable = ['origin_id','destination_id','aircraft_type_id','flight_type_id','schedule_info','remark','fnotification_status_id','is_active','created_at','updated_at'];

	public $timestamps = false;


	
	//Flight Origin
	public function f_origin(){
		return $this->belongsTo('App\Models\Admin\FlightOrigin','origin_id');
	}

	//Flight Destination
	public function f_destination(){
		return $this->belongsTo('App\Models\Admin\FlightDestination','destination_id');
	}

	//Flight Type
	public function f_aircraft_type(){
		return $this->belongsTo('App\Models\Admin\AircraftType','aircraft_type_id');
	}

	//Flight Number
	public function f_type(){
		return $this->belongsTo('App\Models\Admin\FlightType','flight_type_id');
	}



}
