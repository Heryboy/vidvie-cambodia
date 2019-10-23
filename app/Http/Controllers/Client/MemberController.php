<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\UsefulLink;
use App\Models\Admin\Member;
use App\Models\Admin\BusinessType;
use App\Models\Admin\MemberType;
use App\Models\Admin\BaseCountry;
use DB;
use App\user;
use Mail;
use Validator;
use Auth;
use App;
use Session;
use Input;

class MemberController extends Controller
{

  //current_members 
  public function current_members(Request $request){
    

    $BusinessType = BusinessType::all(); //('name','id');
    $BaseCountry = BaseCountry::all(); //('name','id');
    $MemberType = MemberType::all(); //('name','id');


    // members
    $memberData =DB::table('member as m')
                  ->Join('member_type as mt','mt.id','=','m.member_type_id')
                  ->Join('business_type as bt','bt.id','=','m.business_type_id')
                  ->Select('m.*','mt.name as member_name','bt.name as business_name');
            // ->get();
    
    if($request->has('member_type_id') && $request['member_type_id']!='')
      $members = $memberData->where('m.member_type_id','=',$request['member_type_id']);

    if($request->has('business_type_id') && $request['business_type_id']!='')
      $members = $memberData->where('m.business_type_id','=',$request['business_type_id']);

    if($request->has('base_country_id') && $request['base_country_id']!='')
      $members = $memberData->where('m.base_country_id','=',$request['base_country_id']);

    if($request->has('company_name') && $request['company_name']!='')
      $members = $memberData->where('m.name','Like','%'.trim($request['company_name']).'%');
      // $members = Member::all();

    $members = collect($memberData->get());

    return view('Client.members.member')
              ->with('members',$members)
              ->with('BusinessType',$BusinessType)
              ->with('BaseCountry',$BaseCountry)
              ->with('MemberType',$MemberType);
  }

  //member_detail 
  public function member_detail($id,$member_name){
    $members = Member::find($id);
    return view('Client.members.member_detail')->with('members',$members);
  }

  //member_benefit 
  public function member_benefit(){
    return view('Client.members.member_benefit');
  }

  //how_to_be_our_member 
  public function how_to_be_our_member(){
    return view('Client.members.how_to_be_our_member');
  }

}   
