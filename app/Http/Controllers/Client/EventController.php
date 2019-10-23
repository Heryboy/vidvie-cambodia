<?php
namespace App\Http\Controllers\Client;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin\Language;
    use App\Models\Admin\Event;
    use DB;
    use App\user;
    use Validator;
    use Auth;
    use Session;
    use Input;
    use View;
    use Redirect;

    class EventController extends Controller {

      public function __construct()
      {
         
      }

      public function event($id,$event_name)
      { 
        if(Session::get('applangId')){
          $language_id = Session::get('applangId');
        }else{
          $language_id = CONFIG_LANGUAGE;
        }

        $get_records = DB::table('event_description as ed')
                      ->Join('event as e','ed.event_id','=','e.id')
                      ->Select('ed.*','e.*')
                      ->Where('language_id',$language_id)
                      ->Where('e.event_category_id',$id)
                      ->get();
        $event_cate_name = DB::table('event_category_description')->where('event_category_id', $id)->where('language_id',$language_id)->pluck('name');  
        $event_cate_desc = DB::table('event_category_description')->where('event_category_id', $id)->where('language_id',$language_id)->pluck('description');
        // echo $get_records[0];
        $data_arr=array();
        foreach ($get_records as $get_record) {
          $lang_id = $get_record->language_id;
          $data_arr[] = array(
              'id' => $get_record->id,
              'image' => $get_record->image,
              'created_at' => $get_record->created_at,
              'language_id' => $lang_id,
              'name' => $get_record->name,
              'description' => $get_record->description,
          );
        }

        return view('Client.event.event')
                    ->with('event_cate_name',$event_cate_name)
                    ->with('event_cate_desc',$event_cate_desc)
                    ->with('data_arr',$data_arr);
      }

       // event detail
      public function event_detail($event_name,$id,$sub_name)
      {   
          if(Session::get('applangId')){
            $language_id = Session::get('applangId');
          }else{
            $language_id = CONFIG_LANGUAGE;
          }

          $get_records = DB::table('event_image as ei')
                        ->Join('event as e','ei.event_id','=','e.id')
                        ->Select('ei.*','ei.image as ei_image','e.*')
                        ->Where('ei.event_id',$id)
                        ->get();

          $event_name = DB::table('event_description')->where('event_id', $id)->where('language_id',$language_id)->pluck('name');
          
          $event_desc = DB::table('event_description')->where('event_id', $id)->where('language_id',$language_id)->pluck('description');

          $data_arr=array();
          foreach ($get_records as $get_record) {
            $data_arr[] = array(
                'id' => $get_record->id,
                'file' => $get_record->file,
                'ei_image' => $get_record->ei_image,
                'name' => $get_record->name,
            );
          }

          return view('Client.event.event_detail')
                ->with('event_name',$event_name)
                ->with('event_desc',$event_desc)
                ->with('data_arr',$data_arr);
      }

      public function event_report($id,$event_name)
      { 
        if(Session::get('applangId')){
          $language_id = Session::get('applangId');
        }else{
          $language_id = CONFIG_LANGUAGE;
        }

        $get_records = DB::table('event_description as ed')
                      ->Join('event as e','ed.event_id','=','e.id')
                      ->Select('ed.*','e.*')
                      ->Where('language_id',$language_id)
                      ->Where('e.event_category_id',$id)
                      ->get();
        $event_cate_name = DB::table('event_category_description')->where('event_category_id', $id)->where('language_id',$language_id)->pluck('name');  
        $event_cate_desc = DB::table('event_category_description')->where('event_category_id', $id)->where('language_id',$language_id)->pluck('description');
        // echo $get_records[0];
        $data_arr=array();
        foreach ($get_records as $get_record) {
          $lang_id = $get_record->language_id;
          $data_arr[] = array(
              'id' => $get_record->id,
              'image' => $get_record->image,
              'created_at' => $get_record->created_at,
              'language_id' => $lang_id,
              'name' => $get_record->name,
              'description' => $get_record->description,
          );
        }

        return view('Client.event.report')
                    ->with('event_cate_name',$event_cate_name)
                    ->with('event_cate_desc',$event_cate_desc)
                    ->with('data_arr',$data_arr);
      }

      public function event_report_detail($cat_name,$id,$event_name)
      { 
        if(Session::get('applangId')){
            $language_id = Session::get('applangId');
          }else{
            $language_id = CONFIG_LANGUAGE;
          }

          $get_records = DB::table('event_image as ei')
                        ->Join('event as e','ei.event_id','=','e.id')
                        ->Select('ei.*','ei.image as ei_image','e.*')
                        ->Where('ei.event_id',$id)
                        ->get();

          $event_name = DB::table('event_description')->where('event_id', $id)->where('language_id',$language_id)->pluck('name');
          
          $event_desc = DB::table('event_description')->where('event_id', $id)->where('language_id',$language_id)->pluck('description');

          $data_arr=array();
          foreach ($get_records as $get_record) {
            $data_arr[] = array(
                'id' => $get_record->id,
                'file' => $get_record->file,
                'ei_image' => $get_record->ei_image,
                'name' => $get_record->name,
            );
          }

          return view('Client.event.report_detail')
                ->with('event_name',$event_name)
                ->with('event_desc',$event_desc)
                ->with('data_arr',$data_arr);
      }

     

      // event_meeting_schedule
      public function event_meeting_schedule()
      {  
        return view('Client.event.event_meeting_schedule');
      }

  }
