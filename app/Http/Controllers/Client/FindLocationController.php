<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\UsefulLink;
use App\Models\Admin\Committee;
use DB;
use App\user;
use Mail;
use Validator;
use Auth;
use App;
use Session;
use Input;

class FindLocationController extends Controller
{

  //current_members 
  public function find_location(){  
    return view('Client.find_location');
  }
  public function committee(){
  	$committee = Committee::OrderBy('order_level','ASC')->get();
    return view('Client.about.committee')
    			->with('committees',$committee);
  }

}   
