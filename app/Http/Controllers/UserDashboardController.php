<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;

class UserDashboardController extends Controller
{
    public function allOrder(){
        $all_orders = DB::table('carts')->where('user_id', Auth::user()->id)->get();

        $data['all_orders'] = DB::table('carts as c')
                            ->join('products as p', 'p.id', '=', 'c.product_id')
                            ->select('c.*', 'p.*')
                            ->where('user_id', Auth::user()->id)
                            ->get();
        // dd( $data['all_orders']);
    	return view('admin.user_panel.all_order',$data);
    }   
    
    public function privacyPolicy(){
        return view('privacy_policy');
    }
}
