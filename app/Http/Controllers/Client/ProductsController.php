<?php

namespace App\Http\Controllers\Client;

use App;
use App\Http\Controllers\Controller;
use App\Models\Admin\Committee;
use DB;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{

    //product_control
    public function product(Request $request)
    {
        if (Session::get('applangId')) {
            $language_id = Session::get('applangId');
        } else {
            $language_id = CONFIG_LANGUAGE;
        }
        $getProduct = DB::table('product as p')
            ->Join('product_to_category as pc', 'p.product_id', '=', 'pc.product_id')
            ->Join('product_stock_status as ps', 'p.stock_status_id', '=', 'ps.stock_status_id')
            ->leftJoin('product_description as pd', 'p.product_id', '=', 'pd.product_id')
            ->Where('pc.fmenu_id', $request->id)
            ->Select('p.product_id', 'pd.name', 'p.image', 'p.price', 'p.new_price', 'p.discount', 'ps.status')
            ->orderBy('p.product_id', 'DESC')
            ->get();

        return view('Client.products')->with('getProducts', $getProduct);
    }

    public function product_detail(Request $request)
    {
        if (Session::get('applangId')) {
            $language_id = Session::get('applangId');
        } else {
            $language_id = CONFIG_LANGUAGE;
        }
        $getProduct = DB::table('product as p')
            ->Join('product_stock_status as ps', 'p.stock_status_id', '=', 'ps.stock_status_id')
            ->leftJoin('product_description as pd', 'p.product_id', '=', 'pd.product_id')
            ->Where('p.product_id', $request->product_id)
            ->Select('p.product_id', 'pd.name', 'p.image', 'p.price', 'p.new_price', 'p.discount', 'ps.status', 'pd.description')
            ->orderBy('p.product_id', 'DESC')
            ->get();
        $get_product_arr = array();
        foreach ($getProduct as $p) {
            $get_product_arr[] = array(
                'product_id' => $p->product_id,
                'product_name' => $p->name,
                'product_image' => $p->image,
                'product_price' => $p->price,
                'product_new_price' => $p->new_price,
                'product_discount' => $p->discount,
                'product_status' => $p->status,
                'product_description' => $p->description,
            );
        }
        // dd($get_product_arr);
        $getProductImage = DB::table('product_image as p_image')
            ->Where('p_image.product_id', $request->product_id)
            ->Select('p_image.*')
            ->orderBy('p_image.sort_order', 'DESC')
            ->get();
        $getBreadcrumb = DB::table('product as p')
            ->join('product_to_category as pc', 'p.product_id', '=', 'pc.product_id')
            ->Join('fmenu_description as fd', 'pc.fmenu_id', '=', 'fd.fmenu_id')
            ->Join('fmenu as f', 'fd.fmenu_id', '=', 'f.id')
            ->Where('p.product_id', $request->product_id)
            ->get();
        $getAttributeProduct = DB::table('product_attribute as pt')
            ->Where('pt.product_id', $request->product_id)
            ->get();
        foreach ($getBreadcrumb as $b) {
            $get_bread_crumb_arr[] = array(
                'fmenu_id' => $b->fmenu_id,
                'url_link' => $b->url,
                'category_name' => $b->name,
            );
        }
        // dd($get_product_arr);
        //dd($get_bread_crumb_arr[0]['category_name']);
        return view('Client.product_detail')
            ->with('get_bread_crumb_arr', $get_bread_crumb_arr)
            ->with('get_product_arr', $get_product_arr)
            ->with('getProductImage', $getProductImage);
    }
    public function committee()
    {
        $committee = Committee::OrderBy('order_level', 'ASC')->get();
        return view('Client.about.committee')
            ->with('committees', $committee);
    }

}
