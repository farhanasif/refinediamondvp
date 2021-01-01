<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use DB;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    public function index(){
        $subcategories = DB::table('subcategories as sub')
        ->join('categories as cat', 'cat.id', '=', 'sub.category_id')
        ->select('sub.*', 'cat.category_name as category_name')
        ->orderBy('id', 'DESC')->get();
        // dd($subcategories);
        return view('admin.subcategory.all_sub_category', compact('subcategories'));
    }
    public function create(){
        $categories = Category::all();
        return view('admin.subcategory.add_sub_category',compact('categories'));
    }
    public function store(Request $request){
        // dd($request->all());
        $subcategories =  new SubCategory;

        $date = Carbon::now()->format("his")+rand(1000,9999);
// dd($request->file('photo'));
        if ($image = $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = $date.'.'.$extension;
            $path = public_path('uploads/subcategory');
            $image->move($path, $imageName);
            $subcategories->photo = $imageName;
            
        }
        else{
            $subcategories->photo = "Null";
        }
        $subcategories->category_id = $request->category_name;
        $subcategories->subcategory_name = $request->subcategory_name;
        if ($subcategories->save()) {
         return back()->with('success','Subcategory added successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function edit($id){
        $data['subcategory'] = SubCategory::findOrFail($id);
        $data['categories'] = Category::all();
        return view('admin.subcategory.edit_sub_category',$data);
    }

    public function update(Request $request,$id){
        $subcategories = SubCategory::findOrFail($id);

        $date = Carbon::now()->format("his")+rand(1000,9999);

        if ($image = $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = $date.'.'.$extension;
            $path = public_path('uploads/subcategory');
            $image->move($path, $imageName);
            $subcategories->photo = $imageName;
            
        }
        else{
            $subcategories->photo = "Null";
        }
        $subcategories->category_id = $request->category_name;
        $subcategories->subcategory_name = $request->subcategory_name;
        if ($subcategories->save()) {
         return back()->with('success','Subcategory updated successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function delete($id){
        $subcategories = SubCategory::findOrFail($id);
        if($subcategories){
            $subcategories->delete();
            return redirect()->back()->with('success','Subcategory deleted successfully!');
        }else{
            return redirect()->back()->with('failed','Something went wrong!');
        }
    }
}
