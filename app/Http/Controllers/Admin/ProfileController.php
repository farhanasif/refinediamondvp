<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class ProfileController extends Controller
{
    //Admin profile method
    public function profile(){
        return view('admin.profile.profile');
    }

    public function profileUpdate(Request $request,$id){
        
        // dd($request->name());
        $users_id = User::findOrFail($id);
        $photo = $request->file('photo');
        if($photo){
            $imgName = md5(str_random(30).time().'_'.$request->file('photo')).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move('uploads/profilePhoto/',$imgName);
            if(file_exists('uploads/profile/'.$user->photo) AND !empty($user->photo)){
                unlink('uploads/profilePhoto/'.$user->photo);
            }
            $user->image = $imgName;
        }

        // $user->name = $request->name;
        // $user->mobile = $request->mobile;
        // $user->address = $request->address;
        // $user->email = $request->email;
        // $user->country = $request->country;

        $usersUpdate = DB::table('users')->where('id', $users_id)->update($request->all());
        dd($usersUpdate);    
        if ($usersUpdate) {
            return back()->with('success', 'Profile information successfully updated.');
        } else{
            return redirect()->back()->with('failed', 'Something Error Found !, Please try again.');
        }
        
    }

    //Change password method
    public function changePassword(){
        return view('admin.profile.update_password');
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
                Session::flash('success','You have successfully changed the password');
                Auth::logout();
                return redirect()->route('login');
               }else{
                Session::flash('error','New password cannot be the same as old pass');
                return redirect()->back();
               }
        }else{
            Session::flash('error','Old password does not matched!');
            return redirect()->back();
        }
    }

    public function changeTransaction(){
        return view('admin.changeTransaction');
    }
}
