<?php

namespace App\Http\Controllers\Admin;

use App\ManagePromoter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class ManagePromoterController extends Controller
{
    public function index(){
        $promoters = ManagePromoter::orderBy('id', 'DESC')->get();
        // dd($promoters);
        return view('admin.manage_promoter.index', compact('promoters'));
    }
    public function create(){
        return view('admin.manage_promoter.create');
    }
    public function store(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'address' => 'required',
            'password' => 'required',
            'transaction_password' => 'required',
            'promoter_id' => 'required',
        ]);

        $promoters =  new ManagePromoter;
        $promoters->name = $request->name;
        $promoters->email = $request->email;
        $promoters->mobile = $request->mobile;
        $promoters->country = $request->country;
        $promoters->address = $request->address;
        $promoters->password = $request->password;
        $promoters->transaction_password = $request->transaction_password;
        $promoters->promoter_id = $request->promoter_id;
        if ($promoters->save()) {
         return back()->with('success','Promoter successfully saved.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function edit($id){
        $promoter = ManagePromoter::findOrFail($id);
        return view('admin.manage_promoter.edit', compact('promoter'));
    }

    public function update(Request $request,$id){
        
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'country' => 'required',
            'address' => 'required',
            'password' => 'required',
            'transaction_password' => 'required',
            'promoter_id' => 'required',
        ]);
        
        $promoters = ManagePromoter::findOrFail($id);
        $promoters->name = $request->name;
        $promoters->email = $request->email;
        $promoters->mobile = $request->mobile;
        $promoters->country = $request->country;
        $promoters->address = $request->address;
        $promoters->password = $request->password;
        $promoters->transaction_password = $request->transaction_password;
        $promoters->promoter_id = $request->promoter_id;
        if ($promoters->save()) {
         return back()->with('success','Promoter successfully updated.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function destroy($id){
        $promoter = ManagePromoter::findOrFail($id);
        if($promoter){
            $promoter->delete();
            return redirect()->back()->with('success','Promoter successfully deleted.');
        }else{
            return redirect()->back()->with('failed','Something Error Found !, Please try again.');
        }
    }
}
