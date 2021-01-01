<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class FrontendController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->limit(7)->get();
    	return view('front_home',compact('categories'));
    }

    public function viewDetailsProduct($id){

    	// dd($id);
        
    	$view_products_details_product = DB::table('products as pro')
					        ->join('categories as cat', 'cat.id', '=', 'pro.category_id')
					        ->join('subcategories as sub', 'sub.id', '=', 'pro.subcategory_id')
					        ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name')
					        ->where('pro.id',$id)->first();

                            // dd($view_products_details_product);

    	return view('frontend.pages.view_product_details_page',compact('view_products_details_product'));
    }

    public function createUserRegistration(Request $request){

    	return view('frontend.pages.register');
    }

    public function subcategoryWiseShow($id){

        $data['categories'] = DB::table('categories')->limit(7)->get();
    	$data['sub_category_wise_show'] = DB::table('subcategories')->where('category_id', $id)->paginate(12);
        // dd($data['sub_category_wise_show']);
        return view('frontend.pages.subcategory_wise_show',$data);
    }

    public function subcategoryWiseProduct($id){
        // dd($id);
        $data['subcategories'] = DB::table('subcategories')->where('id',$id)->first();
        $data['categories'] = DB::table('categories')->limit(7)->get();
        // $data['all_subcategories'] = DB::table('subcategories')->get();
    	$data['sub_category_wise_product_show'] = DB::table('products')->where('subcategory_id', $id)->paginate(12);
    	return view('frontend.pages.all_subcategory_wise_product_show',$data);
    }


    public function order($id){
        $product_orders = DB::table('products as pro')
                        ->join('categories as cat', 'cat.id', '=', 'pro.category_id')
                        ->join('subcategories as sub', 'sub.id', '=', 'pro.subcategory_id')
                        ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name')
                        ->where('pro.id',$id)->first();
        return view('frontend.pages.productOrder')->with('product_orders',$product_orders);
    }

    public function productOrder(Request $request){
        // $users=User::where('id',Auth::user()->id);
        // dd($users);
        // $id = Auth::id();
        //dd($id);
        // dd($request->all());
        $productOrder = new Order();
        $productOrder->product_name=$request->product_name;
        $productOrder->product_price=$request->product_price;
        $productOrder->name=$request->name;
        $productOrder->email=$request->email;
        $productOrder->address=$request->address;
        $productOrder->mobile=$request->mobile;

        if($productOrder->save()){
            return redirect()->back()->with('success','You have successfully ordered the product!');
         }
         else{
               return redirect()->back()->with('failed','Something went wrong!');
         }
    }

    public function allProductShow(){
        
        $data['categories'] = DB::table('categories')->limit(7)->get();
        $data['all_products'] = DB::table('products as pro')
                                            ->join('categories as cat', 'cat.id', '=', 'pro.category_id')
                                            ->join('subcategories as sub', 'sub.id', '=', 'pro.subcategory_id')
                                            ->select('pro.*', 'cat.category_name as category_name', 'sub.subcategory_name as subcategory_name')
                                            ->paginate(16);
        // dd( $data['all_products']);

        return view('frontend.pages.all_product_show',$data);
    }
}
