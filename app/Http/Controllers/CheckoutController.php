<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Session;
use DB;
use Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        return view('frontend.pages.checkout');
    }

    public function orderCheckout(Request $request){

            if(!empty(session('cart'))) {
                if (Auth::check()) {
                    foreach(session('cart') as $cart){
                        // dd($cart);
                        DB::table('carts')->insert([
                            'product_id' => $cart['product_id'],
                            'product_price' => $cart['product_price'],
                            'qty' =>$cart['product_qty'],
                            'user_id' => Auth::user()->id
                        ]);
                    }
                    return back()->with('success', 'Successfully completed your order!');
                }
                elseif(!Auth::check()){
                    return back()->with('success', 'Your are not registred!. Please regisration first!');
                }
                else{
                    return back()->with('success', 'Your are not logged in!. Please login after order.');
                }
            } else{
                return back()->with('success', 'Your cart is empty.');
            }
    }
}
