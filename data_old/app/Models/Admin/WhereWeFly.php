<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class WhereWeFly extends Model {

	protected $table = 'where_we_fly';
	
	protected $fillable = [
							'image',
							'is_active',
							'updated_at'
						  ];

	public $timestamps = false;
	

	
}
