<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;

class CartController extends Controller
{
    public function cart()
    {   
        $categories = DB::table('categories')->limit(7)->get();
        return view('frontend.pages.cart',compact('categories'));
    }

    public function cartView()
    {
        return view('frontend.pages.cart');
    }

    // public function testCartFunction(){

    //     if ($product->current_stock < $request->qty) {
    //         return redirect()->back()->with('failed','Product not available');
    //      }
    //      $session_id = Session::get('session_id');
 
    //      if (empty($session_id)) {
    //          $session_id = Session::getId();
    //          Session::put('session_id',$session_id);
    //      }
    //      // check user logged in or not logged in
    //      if(Auth::check()){
    //          $productCounts = DB::table('carts')->where(['product_id' => $id,'user_id' => Auth::user()->id ])->count();
    //      }
    //      else{
    //          $productCounts = DB::table('carts')->where(['product_id' => $id,'session_id' => Session::get('session_id') ])->count();
    //          // dd($productCounts);
    //      }
    //      // check products already exist or not in cart
    //      if ( $productCounts > 0) {
    //          // dd($productCounts);
    //          return back()->with('failed', 'Product already exists in cart!');
    //      }
    //      // save the product
    //      if (Auth::check()) {
    //          $cart =  DB::table('carts')->insert([
    //              'product_id' => $id,
    //              'product_price' => $request->current_price,
    //              'qty' =>1,
    //              'user_id' => Auth::user()->id
    //          ]);
    //          return back()->with('success', 'Product added to cart successfully!');
    //      }
    //      else{
    //          $cart =  DB::table('carts')->insert([
    //              'product_id' => $id,
    //              'product_price' => $request->current_price,
    //              'qty' =>1,
    //              'session_id' =>$session_id
    //          ]);
    //          return back()->with('success', 'Product added to cart successfully!');
    //      }
    // }

    
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
 
        if(!$product) {
            abort(404);
        }
 
        $cart = session()->get('cart');
        // dd( $cart);
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        'product_id' => $product->id,
                        'product_price' => $product->current_price,
                        'product_name' => $product->title,
                        'product_image' => $product->photo,
                        'product_qty' => 1,
                    ]
            ];
 
            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])){
            
            $cart[$id]['qty'] = $request->quantity;
    
            session()->put('cart', $cart);
    
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if item not exist in cart then add to cart with quantity
        $cart[$id] = [

            'product_id' => $product->id,
            'product_price' => $product->current_price,
            'product_name' => $product->title,
            'product_image' => $product->photo,
            'product_qty' => 1,

        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }

    public function update(Request $request)
    {
        if($request->id and $request->product_qty)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["product_qty"] = $request->product_qty;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}
