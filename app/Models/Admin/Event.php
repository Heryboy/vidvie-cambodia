<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'event';
	protected $fillable = ['event_category_id','modified_by','event_start','event_end','publish_date','is_active'];
	public $timestamps = true;
	
	public function EventCategory($event_category_id){
		return $this->belongsTo('App\Models\Admin\EventCategory','event_category_id');
	}
}
