<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightDescription extends Model {

	protected $table = 'flight_description';
	
	protected $fillable = ['flight_type_id','flight_route_id','flight_date','flight_number_id','flight_time_id','origin_id','destination_id','remark','is_active','created_at','updated_at'];

	public $timestamps = false;


	//Flight Type
	public function f_type(){
		return $this->belongsTo('App\Models\Admin\FlightType','flight_type_id');
	}

	//Flight Route
	public function f_route(){
		return $this->belongsTo('App\Models\Admin\FlightRoute','flight_route_id');
	}

	//Flight Number
	public function f_number(){
		return $this->belongsTo('App\Models\Admin\FlightNumber','flight_number_id');
	}

	//Flight Time
	public function f_time(){
		return $this->belongsTo('App\Models\Admin\FlightTime','flight_time_id');
	}

	//Flight Origin
	public function f_origin(){
		return $this->belongsTo('App\Models\Admin\FlightOrigin','origin_id');
	}

	//Flight Destination
	public function f_destination(){
		return $this->belongsTo('App\Models\Admin\FlightDestination','destination_id');
	}

}
