<?php
namespace App\Helpers;

use DB;
use Helpers;
use Session;

class common
{
    // getMenu

    public static function getLanguage()
    {
        $languages = DB::table('language')->get();
        return $languages;
    }

    public static function getMenu()
    {
        if (Session::get('applangId')) {
            $language_id = Session::get('applangId');
        } else {
            $language_id = CONFIG_LANGUAGE;
        }

        $catMenus = DB::table('fmenu_description as fd')
            ->Join('fmenu as f', 'f.id', '=', 'fd.fmenu_id')
            ->Where('fd.language_id', $language_id)
            ->Where('parent_id', 0)
            ->Select('fd.*', 'f.id', 'f.url')
            ->orderBy('f.ordering', 'ASC')
            ->get();
        $Menu_arr = array();
        foreach ($catMenus as $catMenu) {
            $catMenu_Id = $catMenu->id;

            $child_Menus = DB::table('fmenu_description as fd')
                ->Join('fmenu as f', 'f.id', '=', 'fd.fmenu_id')
                ->Where('parent_id', $catMenu_Id)
                ->Select('fd.*', 'f.id', 'f.url')
                ->orderBy('f.ordering', 'ASC')
                ->get();

            $child_Menu_arry = array();
            foreach ($child_Menus as $child_Menu) {
                $child_Menu_Id = $child_Menu->id;              
                $sub_Child_Menus = DB::table('fmenu_description as fd')
                    ->Join('fmenu as f', 'f.id', '=', 'fd.fmenu_id')
                    ->Where('parent_id', $child_Menu_Id)
                    ->Select('fd.*', 'f.id', 'f.url')
                    ->orderBy('f.ordering', 'ASC')
					->get();				
                $sub_Child_Menu_arry = array();
                foreach ($sub_Child_Menus as $sub_Child_Menu) {
                    $sub_Child_Menu_arry[] = array(
						'id' => $sub_Child_Menu->id,
						'fmenu_id' => $sub_Child_Menu->fmenu_id,
                        'name' => $sub_Child_Menu->name,
                        'url' => $sub_Child_Menu->url,
                    );
                }
                $child_Menu_arry[] = array(
                    'id' => $child_Menu->id,
					'name' => $child_Menu->name,
					'fmenu_id' => $child_Menu->fmenu_id,
					'url' => $child_Menu->url,
					'sub_child_menu' => $sub_Child_Menu_arry
                );
            }

            $Menu_arr[] = array(
                'id' => $catMenu->id,
                'name' => $catMenu->name,
                'url' => $catMenu->url,
                'child_Menu' => $child_Menu_arry,
            );
        }
		// dd($Menu_arr);
        return $Menu_arr;
    }

    public static function getInformatoin()
    {
        if (Session::get('applangId')) {
            $language_id = Session::get('applangId');
        } else {
            $language_id = CONFIG_LANGUAGE;
        }

        $get_records = DB::table('information_description as id')
            ->Join('information as i', 'id.information_id', '=', 'i.id')
            ->Select('id.*', 'i.id as id')
            ->Where('id.language_id', $language_id)
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

    public static function getBanners()
    {
        $banners = DB::table('banner')->get();
        return $banners;
    }

    public static function getPartners()
    {
        $banners = DB::table('partner')->OrderBy('order_level', 'ASC')->get();
        return $banners;
    }

    public static function FormatDate($date)
    {
        $d = strtotime($date);
        $newdate = date(FORMAT_DATE, strtotime($d));
        return $newdate;
    }

}
