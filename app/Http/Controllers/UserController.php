<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = DB::table('users')->get();
    	return view('admin.user.all_user', compact('users'));
    }

        public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.user.edit_user', compact('user'));
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->photo = $request->photo;
        $users->role_type = $request->role_type;
        $users->bio = $request->bio;
        if ($users->save()) {
         return back()->with('success','User updated successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function delete($id){

    $user = User::findOrFail($id);
    if($user){
        $user->delete();
        return redirect()->back()->with('success','User deleted successfully!');
    }else{
        return redirect()->back()->with('failed','Something went wrong!');
    }
}
}
