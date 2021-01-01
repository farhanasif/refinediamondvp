<?php

namespace App\Http\Controllers\Promotor;

//use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class purchaseManagementController extends Controller
{

    public function createPurchaseAmount(){
    	
        return view('promotor.purchaseManagement.create_purchase_amount');
    }

    public function recievedFromCompany(){
        return view('promotor.purchaseManagement.recieved_from_company');
    }

    public function recievedFromSelf(){
    	return view('promotor.purchaseManagement.recieved_from_self');
    }
}
