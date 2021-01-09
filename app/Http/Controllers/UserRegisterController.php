<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserRegisterController extends Controller
{
    public function createUserRegistration(){

        return view('frontend.pages.register');
    }

    public function store(Request $request)
    {
        //1. Validation
        $this->validate($request,[
            'name'=>'required',
            'country'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
        ]);
        // 2. Data insert
        $users=new User();
        if ($request->sponsor_id AND $request->sponsor_id != 1) {
        	return redirect()->back()->with('failed','Opps....Your Sponsor Id Is Not Valid');
        }
        
        if ($request->sponsor_id) {
        	 $users->sponsor_id=$request->sponsor_id;
            $users->role="promoter";
        }else{
            $users->role="user";
        }
        
        $users->name=$request->name;
        $users->country=$request->country;
        $users->address=$request->address;
        $users->mobile=$request->mobile;
        $users->email=$request->email;
        if ($request->terms_condition) {
           //$users->terms_condition=$request->terms_condition;
           $users->terms_condition="yes";
        }else{
            $users->terms_condition="no"; 
        }
        $users->password=Hash::make($request->password);
        $users->save();
        return redirect()->back()->with('success','You Have Successfully Registred');
    }
}
