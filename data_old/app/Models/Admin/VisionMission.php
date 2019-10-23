<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model {

	protected $table = 'vision_mission';
	
	protected $fillable = [
							'image',
							'is_active',
							'updated_at'
						  ];

	public $timestamps = false;
	

	
}
