<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\UsefulLink;
use App\Models\Admin\Member;
use DB;
use App\user;
use Mail;
use Validator;
use Auth;
use App;
use Session;
use Input;

class CommonController extends Controller
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Phnom_Penh');
        $languages = DB::table('language')->get();
        $language_id = Session::get('applangId');
        if($language_id==1){
          App::setLocale('kh');
        }else if($language_id==2){
          App::setLocale('en');
        }else if($language_id==3){
          App::setLocale('ch(simplify)');
        }else if($language_id==4){
          App::setLocale('ch(traditional)');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      // $RecentEvents = DB::table('event')->Where('event_start','<=',$this->DateNow())->Limit(6)->get();

      if(Session::get('applangId')){
        $language_id = Session::get('applangId');
      }else{
        $language_id = CONFIG_LANGUAGE;
      }

      $RecentEvents = DB::table('event_description as ed')
                      ->Join('event as e','ed.event_id','=','e.id')
                      ->Select('ed.*','e.*')
                      ->Where('ed.language_id',$language_id)
                      ->Where('e.event_start','<=',$this->DateNow())
                      ->whereNotIn('e.event_category_id',[1,4])
                      ->Limit(6)
                      ->get();

      $UpcomingEvents = DB::table('event_description as ed')
                        ->Join('event as e','ed.event_id','=','e.id')
                        ->Select('ed.*','e.*')
                        ->Where('ed.language_id',$language_id)
                        ->Where('e.event_start','>',$this->DateNow())
                        ->Limit(3)
                        ->get();

      // $UpcomingEvents = DB::table('event')->Where('event_start','>',$this->DateNow())->Limit(3)->get();

      $UsefulLinks = UsefulLink::all();
      return view('Client.home')
              ->with('RecentEvents',$RecentEvents)
              ->with('UpcomingEvents',$UpcomingEvents)
              ->with('UsefulLinks',$UsefulLinks);


    }

    //category 
    public function category(Request $request){

      $id = $request['id'];
      
      if(Session::get('applangId')){
        $language_id = Session::get('applangId');
      }else{
        $language_id = CONFIG_LANGUAGE;
      }

      $get_records = DB::table('fmenu_description as fd')
                    ->Join('fmenu as f','fd.fmenu_id','=','f.id')
                    ->Select('fd.*','f.*')
                    ->Where('language_id',$language_id)
                    ->Where('fd.fmenu_id',$id)
                    ->get();
      
      // echo $get_records[0];
      foreach ($get_records as $get_record) {
        $lang_id = $get_record->language_id;
        $data_arr[] = array(
            'id' => $get_record->id,
            'language_id' => $lang_id,
            'name' => $get_record->name,
            'description' => $get_record->description,
        );
      }

       return view('Client.category')
                        ->with('data_arr',$data_arr);

    }

    //Contact 
    public function Contact(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.contact')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }


    //current_members 
    public function current_members(){

        $members = Member::all();
        return view('Client.current_members')
                  ->with('members',$members);
    }

    //background 
    public function background(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.background')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }


    //committee 
    public function committee(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.committee')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    //member's benifit 
    public function member_benefit(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.member_benefit')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // how_to_be_our_member
    public function how_to_be_our_member(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.how_to_be_our_member')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // announcement
    public function announcement(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.announcement')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // news
    public function news(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.news')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // recent_events
    public function recent_events(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.recent_events')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // upcoming_events
    public function upcoming_events(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.upcoming_events')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // meeting_schedules
    public function meeting_schedules(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.meeting_schedules')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // download_document
    public function download_document(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.download_document')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // presentation
    public function presentation(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.presentation')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // research
    public function research(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.research')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    // others
    public function others(){
        // return view('Client.emails.contact');
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;
        $languages = Language::all();
        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);

        return view('Client.others')->with('languages',$languages)
                                      ->with('topMenu',$topMenu)
                                      ->with('mainMenu',$mainMenu)
                                      ->with('footerMenu',$footerMenu);
    }

    //public send message
    public function sendToContactInfo(Request $request){
        $input = $request->all();
        $subject = $request->get('subject');
        $email = $request->get('email');
        $message = $request->get('message');
        //dd($email);
        define('email_visitor', $email);
        define('subject', $subject);
        define('message', $message);

        $message = $request->get('message');
        //dd($subject);
        $rules = array(
          'email' => 'Required|Between:3,64|Email',
          'subject'     => 'Required',
          'message'     => 'Required'
        );
        
        $messages = [
           'email.required' => 'Please provide your email!',
           'email.email' => 'Your email is invalid!',
           'subject.required' => 'Please provide subject!',
           'message.required' => 'Please provide messages!'
        ];

        $v = Validator::make($input, $rules, $messages);
        if( $v->passes() ) {

          $data = $request->only("email", "subject", "message");

          Mail::send('Client.emails.contact', $data, function($message){
              $message->from(email_visitor, "Visitor");
              $message->to(CONTACT_EMAIL)->subject(subject);
          });
          return redirect('contact')->with('message','Message has been sent! Thanks!');

        } else { 
          return redirect('contact')->withInput()->withErrors($v);
        }
    }

    //page
    public function page($id)
    {
        $language_id = Session::get('applangId');
        if(!$language_id) $language_id = CONFIG_LANGUAGE;

        $topMenu = $this->getFMenuLists($language_id,1,0);
        $mainMenu = $this->getFMenuLists($language_id,2,0);
        $footerMenu = $this->getFMenuLists($language_id,3,0);
        $data = $this->getContent($id, $language_id);
        //$data = DB::table('content_description')->where('content_id',$id)->first();
        //dd($data);
        $article_title = $this-> getTitleArticle($id, $language_id);
        return view('Client.content')->with('topMenu',$topMenu)
                                  ->with('article_title',$article_title)
                                  ->with('mainMenu',$mainMenu)
                                  ->with('id',$id)
                                  ->with('data',$data)
                                  ->with('footerMenu',$footerMenu);
    }



}   
