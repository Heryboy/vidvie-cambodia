<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightRoute extends Model {

	protected $table = 'flight_route';
	
	protected $fillable = ['name','origin_id','destination_id','is_active'];

	public $timestamps = false;

	//Flight Origin
	public function f_origin(){
		return $this->belongsTo('App\Models\Admin\FlightOrigin','origin_id');
	}

	//Flight Destination
	public function f_destination(){
		return $this->belongsTo('App\Models\Admin\FlightDestination','destination_id');
	}

}
