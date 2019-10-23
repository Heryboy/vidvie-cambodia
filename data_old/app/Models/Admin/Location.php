<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class location extends Model {

	protected $table = 'location';
	
	protected $fillable = ['location'];

	public $timestamps = false;
	
}
