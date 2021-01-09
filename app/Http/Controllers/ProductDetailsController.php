<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class ProductDetailsController extends Controller
{
    public function index(){
        $product_details = DB::table('product_details')->orderBy('id', 'DESC')->get();
        return view('admin.product_details.index', compact('product_details'));
    }
    public function create(){
        return view('admin.product_details.create');
    }
    public function store(Request $request){
        // dd($request->all());
        // $this->validate($request,[
        //     'product_size' => 'required',
        //     'product_color' => 'required',
        // ]);

        $product_details =   DB::table('product_details')->insert(
            ['product_size' => $request->product_size,
             'product_color' => $request->product_color
            ]
        );

        if ($product_details) {
         return back()->with('success','Product details information successfully saved.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function edit($id){
        $product_detail = DB::table('product_details')->where('id',$id)->first();
        return view('admin.product_details.edit', compact('product_detail'));
    }

    public function update(Request $request,$id){
        
        // $this->validate($request,[
        //     'product_size' => 'required',
        //     'product_color' => 'required',
        // ]);

        $product_details =   DB::table('product_details')->insert(
            ['product_size' => $request->product_size,
             'product_color' => $request->product_color
            ]
        );
        if ($product_details) {
         return back()->with('success','Product details information successfully updated.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function delete($id){
        $product_details = DB::table('product_details')->where('id',$id)->delete();
        if($product_details){
            return redirect()->back()->with('success','Product details information successfully deleted.');
        }else{
            return redirect()->back()->with('failed','Something Error Found !, Please try again.');
        }
    }
}
