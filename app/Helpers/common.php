<?php 
	namespace App\Helpers;

	use App\Http\Controllers\Controller;
	use App\Models\Admin\Langugae;
	use Carbon\Carbon;
	use DB;
	use Validator;
	use Auth;
	use Session;
	use Helpers;
	class common{ 
		// getMenu
		
		public static function getLanguage(){
			$languages = DB::table('language')->get();
			return $languages;
		}

		public static function getMenu(){
			if(Session::get('applangId')){
				$language_id = Session::get('applangId');
			}else{
				$language_id = CONFIG_LANGUAGE;
			}

			$catMenus = DB::table('fmenu_description as fd')
			            ->Join('fmenu as f','f.id','=','fd.fmenu_id')
			            ->Where('fd.language_id',$language_id)
			            ->Where('parent_id',0)
			            ->Select('fd.*','f.id','f.url')
			            ->orderBy('f.ordering','ASC')
			            ->get();
			$Menu_arr = array();
			foreach ($catMenus as $catMenu) {
			  $catMenu_Id = $catMenu->id;

			  $child_Menus = DB::table('fmenu_description as fd')
			                ->Join('fmenu as f','f.id','=','fd.fmenu_id')
			                ->Where('parent_id',$catMenu_Id)
			                ->Select('fd.*','f.id','f.url')
			                ->orderBy('f.ordering','ASC')
			                ->get();
			  
			  $child_Menu_arry = array();
			  foreach ($child_Menus as $child_Menu) {
			    $child_Menu_arry[] = array(
			      'id' => $child_Menu->id,
			      'name' => $child_Menu->name,
			      'url' => $child_Menu->url,
			    );
			  }

			  $Menu_arr[] = array(
			    'id' => $catMenu->id,
			    'name' => $catMenu->name,
			    'url' => $catMenu->url,
			    'child_Menu' => $child_Menu_arry
			  );
			}

			return $Menu_arr;
		}

		public static function getInformatoin(){
			if(Session::get('applangId')){
			  $language_id = Session::get('applangId');
			}else{
			  $language_id = CONFIG_LANGUAGE;
			}

			$get_records = DB::table('information_description as id')
			              ->Join('information as i','id.information_id','=','i.id')
			              ->Select('id.*','i.id as id')
			              ->Where('id.language_id',$language_id)
			              ->get();

			$data_arr = array();
			foreach ($get_records as $get_record) {
			  $data_arr[] = array(
			      'id' => $get_record->id,
			      'name' => $get_record->name,
			      'description' => $get_record->description,
			  );
			}

			return $data_arr;

		}


		public static function getBanners(){
			$banners = DB::table('banner')->get();
			return $banners;
		}

		public static function getPartners(){
			$banners = DB::table('partner')->OrderBy('order_level','ASC')->get();
			return $banners;
		}

		public static function FormatDate($date){
			$d= strtotime($date);
			$newdate = date(FORMAT_DATE,strtotime($d));
			return $newdate;
		}

	}

?>