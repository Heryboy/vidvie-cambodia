<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class FlightNumber extends Model {

	protected $table = 'flight_number';
	
	protected $fillable = ['name','is_active'];

	public $timestamps = false;

}
