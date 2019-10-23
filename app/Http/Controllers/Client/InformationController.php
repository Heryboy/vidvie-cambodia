<?php
namespace App\Http\Controllers\Client;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin\Language;
    use App\Models\Admin\UsefulInfoListing;
    use DB;
    use App\user;
    use Validator;
    use Auth;
    use Session;
    use Input;
    use View;
    use Redirect;

    class InformationController extends Controller {


        public function __construct()
        {
           
        }

        public function index()
        {
         
        }

        public function create()
        {   
           
        }


        public function information($id,$name)
        { 
            if(Session::get('applangId')){
              $language_id = Session::get('applangId');
            }else{
              $language_id = CONFIG_LANGUAGE;
            }

            $get_records = DB::table('information_description as id')
                          ->Join('information as i','id.information_id','=','i.id')
                          ->Select('id.*','i.*')
                          ->Where('language_id',$language_id)
                          ->Where('id.information_id',$id)
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

            return view('Client.information.index')
                        ->with('data_arr',$data_arr);
          }
        }
