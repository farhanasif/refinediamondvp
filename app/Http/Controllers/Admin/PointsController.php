<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.all_category', compact('categories'));
    }
    public function create(){
        return view('admin.category.add_category');
    }
    public function store(Request $request){
        // dd($request->all());
        $categories =  new Category;
        $date = Carbon::now()->format("his")+rand(1000,9999);

        if ($image = $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = $date.'.'.$extension;
            $path = public_path('uploads/category');
            $image->move($path, $imageName);
            $categories->photo = $imageName;
        }
        else{
            $categories->photo = "Null";
        }

        $categories->category_name = $request->category_name;
        if ($categories->save()) {
         return back()->with('success','Category added successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit_category', compact('category'));
    }

    public function update(Request $request,$id){
        // dd($request->all());
        $categories = Category::findOrFail($id);
        $date = Carbon::now()->format("his")+rand(1000,9999);

        if ($image = $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = $date.'.'.$extension;
            $path = public_path('uploads/category');
            $image->move($path, $imageName);
            $categories->photo = $imageName;
            // dd('ok');
        }
        else{
            $categories->photo = "Null";
        }
        $categories->category_name = $request->category_name;
        if ($categories->save()) {
         return back()->with('success','Category updated successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        if($category){
            $category->delete();
            return redirect()->back()->with('success','Category deleted successfully!');
        }else{
            return redirect()->back()->with('failed','Something went wrong!');
        }
    }
}
