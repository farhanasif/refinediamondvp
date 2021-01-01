<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;
use App\Category;
use App\SubCategory;
use Carbon\Carbon;
use DB;

class PointsController extends Controller
{
    public function index(){
        // $points = Point::orderBy('id', 'DESC')->get();
        $points = DB::table('points as po')
        ->join('categories as cat', 'cat.id', '=', 'po.category_id')
        ->join('subcategories as sub', 'sub.id', '=', 'po.subcategory_id')
        ->join('product_types as p_type', 'p_type.id', '=', 'po.product_type_id')
        ->select('po.*', 'cat.category_name as category_name' , 'sub.subcategory_name as subcategory_name','p_type.product_type as product_type')
        ->orderBy('id', 'DESC')->get();
        // dd($points);
        return view('admin.point.all_point', compact('points'));
    }
    public function create(){
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $data['product_types'] = DB::table('product_types')->get();
        return view('admin.point.add_point',$data);
    }
    public function store(Request $request){
        // dd($request->all());
        $points =  new Point;
        $points->category_id = $request->category_name;
        $points->subcategory_id = $request->subcategory_name;
        $points->product_type_id = $request->product_type;
        $points->price = $request->product_price;
        if ($points->save()) {
         return back()->with('success','Point added successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function edit($id){
        $data['point'] = Point::findOrFail($id);
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $data['product_types'] = DB::table('product_types')->get();
        return view('admin.point.edit_point', $data);
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $points = Point::findOrFail($id);
        $points->category_id = $request->category_name;
        $points->subcategory_id = $request->subcategory_name;
        $points->product_type_id = $request->product_type;
        $points->price = $request->product_price;
        if ($points->save()) {
         return redirect('/point/all-point')->with('success','Point updated successfully!');
        }
        else{
            return redirect('/point/all-point')->with('failed','Something went wrong!');
        }
    }

    public function delete($id){
        $point = Point::findOrFail($id);
        if($point){
            $point->delete();
            return redirect()->back()->with('success','Point deleted successfully!');
        }else{
            return redirect()->back()->with('failed','Something went wrong!');
        }
    }
}
