<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Order;
use App\Cart;

class OrderController extends Controller
{
   public function index(){
      // $orders = DB::table('carts')->get();

      $orders = DB::table('carts as c')
      ->join('users as u', 'u.id', '=', 'c.user_id')
      ->join('products as p', 'p.id', '=', 'c.product_id')
      ->select('c.*',  DB::raw('SUM(c.product_price) as total_price'), 'p.title as product_name', 'u.name as user_name', 'u.email as user_email','u.address as user_address','u.mobile as user_mobile')
      ->orderBy('id', 'DESC')
      ->groupBy('c.user_id')
      ->get();

      // dd($orders);
   	return view('admin.order.all_order',compact('orders'));
   }

   public function delete($id){
      // dd($id);
      $order = Cart::findOrFail($id);
      if($order){
          $order->delete();
          return redirect()->back()->with('success','Order deleted successfully!');
      }else{
          return redirect()->back()->with('failed','Something went wrong!');
      }
  }

   public function edit($id){
      // dd($id);
      $order = Cart::findOrFail($id);
      return view('admin.order.edit_order',compact('order'));
   }

   public function update(Request $request, $id){
      // dd($id);
      $orders = Order::findOrFail($id);
      $orders->product_name=$request->product_name;
      $orders->product_price=$request->product_price;
      $orders->name=$request->name;
      $orders->email=$request->email;
      $orders->address=$request->address;
      $orders->mobile=$request->mobile;

      if($orders->save()){
         return redirect()->back()->with('success','Order updated successfully!');
      }
      else{
            return redirect()->back()->with('failed','Something went wrong!');
      }
   }
}
