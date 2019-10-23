<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'slide';
    protected $fillable = ['image','is_active','created_at','updated_at'];

}
