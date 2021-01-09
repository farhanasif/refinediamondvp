<?php

namespace App\Http\Controllers\Promotor;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileManagementController extends Controller
{
    //Admin profile method
    public function profile(){
        return view('promotor.profile');
    }

    //Change password method
    public function changePassword(){
        return view('promotor.changePassword');
    }

    public function updatePassword(Request $request){
        $this->validate($request,[
            'old_password'=>'required',
            'password'=>'required||min:6|confirmed',
            // 'password_confirmation'=>'required|same:new_password',

        ]);
        $hashedPassword=Auth::user()->password;
        if(Hash::check($request->old_password,$hashedPassword)){
                if(! Hash::check($request['password'],$hashedPassword)){
                $users = User::find(Auth::guard('web')->user()->id);
                $users->password = Hash::make($request->password);
                $users->save();
                Session::flash('success','You Have Successfully Changed The Password');
                Auth::logout();
                return redirect()->route('login');
               }else{
                Session::flash('error','New Password Cannot Be The Same As Old Pass');
                return redirect()->back();
               }
        }else{
            Session::flash('error','Old Password Does Not Matched');
            return redirect()->back();
        }
    }

    public function changeTransaction(){
        return view('promotor.changeTransaction');
    }
}
