<?php
namespace App\Http\Controllers\Client;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Models\Admin\Language;
    use App\Models\Admin\UsefulInfoListing;
    use App\Models\Admin\UsefulInfoCategory;
    use DB;
    use App\user;
    use Validator;
    use Auth;
    use Session;
    use Input;
    use View;
    use Redirect;

    class UsefulInformationController extends Controller {


        public function __construct()
        {
           
        }

        public function index()
        {
          return view('Admin.design.banner.index')
                                  ->with('banners',$banners)
                                  ->with('view_title',$this->view_title);
        }

        public function create()
        {   
           
        }


        public function useful_information($id,$name)
        { 
          $useful_cat_name = DB::table('useful_infocategory')->where('id', $id)->pluck('name');
          $useful_info_desc = UsefulInfoListing::where('useful_InfoCategory_id',$id)->get();
          return view('Client.useful_information.index')
                      ->with('useful_cat_name',$useful_cat_name)
                      ->with('useful_info_desc',$useful_info_desc);
        }


    }
