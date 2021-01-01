<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Product;
use DB;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products as pro')
        ->join('categories as cat', 'cat.id', '=', 'pro.category_id')
        ->join('subcategories as sub', 'sub.id', '=', 'pro.category_id')
        ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name')
        ->orderBy('id', 'DESC')->get();
        // dd($products);
        return view('admin.product.all_product', compact('products'));
    }

    public function view_product($id){
        $view_products = DB::table('products as pro')
        ->join('categories as cat', 'cat.id', '=', 'pro.category_id')
        ->join('subcategories as sub', 'sub.id', '=', 'pro.category_id')
        ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name')
        ->first();
        // dd($products);
        return view('admin.product.view_product', compact('view_products'));
    }
    public function create(){
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        return view('admin.product.add_product',$data);
    }
    public function store(Request $request){
        // dd($request->all());
        $products =  new Product;

        $date = Carbon::now()->format("his")+rand(1000,9999);

        if ($image = $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = $date.'.'.$extension;
            $path = public_path('uploads/product');
            $image->move($path, $imageName);
            $products->photo = $imageName;
            
        }
        else{
            $products->photo = "Null";
        }
        $products->category_id = $request->category_name;
        $products->subcategory_id = $request->subcategory_name;
        $products->sku = $request->sku;
        $products->title = $request->title;
        $products->short_description = $request->short_description;
        $products->long_description = $request->long_description;
        $products->specification = $request->specification;
        $products->delivery_description = $request->delivery_description;
        $products->current_stock = $request->current_stock;
        $products->current_price = $request->current_price;
        $products->discount_price = $request->discount_price;
        $products->type = $request->type;
        if ($products->save()) {
         return back()->with('success','Product added successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function edit($id){
        $data['products'] = Product::findOrFail($id);
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        return view('admin.product.edit_product',$data);
    }

    public function update(Request $request,$id){
        $products = Product::findOrFail($id);

        $date = Carbon::now()->format("his")+rand(1000,9999);

        if ($image = $request->file('photo')){
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imageName = $date.'.'.$extension;
            $path = public_path('uploads/product');
            $image->move($path, $imageName);
            $products->photo = $imageName;
            
        }
        else{
            $products->photo = "Null";
        }
        $products->category_id = $request->category_name;
        $products->subcategory_id = $request->subcategory_name;
        $products->sku = $request->sku;
        $products->title = $request->title;
        $products->short_description = $request->short_description;
        $products->long_description = $request->long_description;
        $products->specification = $request->specification;
        $products->delivery_description = $request->delivery_description;
        $products->current_stock = $request->current_stock;
        $products->current_price = $request->current_price;
        $products->discount_price = $request->discount_price;
        $products->type = $request->type;
        if ($products->save()) {
         return back()->with('success','Product updated successfully!');
        }
        else{
            return back()->with('failed','Something went wrong!');
        }
    }

    public function delete($id){
        $products = Product::findOrFail($id);
        if($products){
            $products->delete();
            return redirect()->back()->with('success','Product deleted successfully!');
        }else{
            return redirect()->back()->with('failed','Something went wrong!');
        }
    }
}
