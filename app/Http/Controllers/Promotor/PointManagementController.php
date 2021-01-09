<?php

namespace App\Http\Controllers\Promotor;

//use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PointManagementController extends Controller
{
    public function selfPoint(){
        return view('promotor.pointManagement.self_center_open');
    }

    public function downLine(){
        return view('promotor.pointManagement.downLine_center_open');
    }
}
