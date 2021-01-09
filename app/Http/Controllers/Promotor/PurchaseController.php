<?php

namespace App\Http\Controllers\Promotor;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{

    public function productPurchase(){
    	$productPurchase=Product::orderBy('id','desc')->get();
        return view('promotor.productPurchase.productPurchase',compact('productPurchase'));
    }

    public function productPurchasePoint(){
        return view('promotor.productPurchase.productPurchaseReport');
    }
}
