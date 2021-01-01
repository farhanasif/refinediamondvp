<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarketingStuff;
use DB;

class MarketingStuffController extends Controller
{
    public function index(){
        $marketing_stuffs = MarketingStuff::all();
        // dd($marketing_stuffs);
        return view('admin.marketing_stuffs.all_marketing_stuff', compact('marketing_stuffs'));
    }
    public function create(){
        return view('admin.marketing_stuffs.add_marketing_stuff');
    }
    public function store(Request $request){
        // dd($request->all());
        $marketing_stuffs =  new MarketingStuff;
        $marketing_stuffs->name = $request->name;
        $marketing_stuffs->email = $request->email;
        $marketing_stuffs->mobile = $request->mobile;
        $marketing_stuffs->address = $request->address;
        if ($marketing_stuffs->save()) {
         return back()->with('success','Marketing Stuff added successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function edit($id){

        $data['marketing_stuff'] = MarketingStuff::findOrFail($id);
        return view('admin.marketing_stuffs.edit_marketing_stuff', $data);
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $marketing_stuffs = MarketingStuff::findOrFail($id);
        $marketing_stuffs->name = $request->name;
        $marketing_stuffs->email = $request->email;
        $marketing_stuffs->mobile = $request->mobile;
        $marketing_stuffs->address = $request->address;
        if ($marketing_stuffs->save()) {
         return redirect('/marketing-stuff/all-marketing-stuff')->with('success','Marketing Stuff updated successfully!');
        }
        else{
            return redirect('/marketing-stuff/all-marketing-stuff')->with('failed','Something went wrong!');
        }
    }

    public function delete($id){
        $marketing_stuff = MarketingStuff::findOrFail($id);
        if($marketing_stuff){
            $marketing_stuff->delete();
            return redirect()->back()->with('success','Marketing Stuff deleted successfully!');
        }else{
            return redirect()->back()->with('failed','Something went wrong!');
        }
    }
}
