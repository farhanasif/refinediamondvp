<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index(){
    	$data['total_users'] = DB::table('users')->count('id');
    	$data['total_products'] = DB::table('products')->count('id');
    	$data['total_categories'] = DB::table('categories')->count('id');
        return view('admin.admin_dashboard',$data);
    }
    public function userDashboard(){
        return view('admin.user_dashboard');
    }
    public function promoterDashboard(){
        return view('admin.promoter_dashboard');
    }
}
