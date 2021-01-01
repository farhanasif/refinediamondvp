<?php

namespace App\Http\Controllers;

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
        ->leftJoin('categories as cat', 'cat.id', '=', 'pro.category_id')
        ->leftJoin('subcategories as sub', 'sub.id', '=', 'pro.category_id')
        ->leftJoin('product_types as p_type', 'p_type.id', '=', 'pro.product_type_id')
        ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name','p_type.product_type as product_type')
        ->orderBy('id', 'DESC')->get();
        // dd($products);
        return view('admin.product.all_product', compact('products'));
    }

    public function view_product($id){
        $view_products = DB::table('products as pro')
        ->leftJoin('categories as cat', 'cat.id', '=', 'pro.category_id')
        ->leftJoin('subcategories as sub', 'sub.id', '=', 'pro.category_id')
        ->leftJoin('product_types as p_type', 'p_type.id', '=', 'pro.product_type_id')
        ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name','p_type.product_type as product_type')
        ->first();
        dd($products);
        return view('admin.product.view_product', compact('view_products'));
    }
    public function create(){
        $data['categories'] = Category::all();
        $data['subcategories'] = SubCategory::all();
        $data['product_types'] = DB::table('product_types')->get();
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
        $products->product_type_id = $request->type;
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
        $data['product_types'] = DB::table('product_types')->get();
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
        $products->product_type_id = $request->type;
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
