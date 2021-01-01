<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ProductTerms;

class ProductTermsController extends Controller
{
    public function index(){
        $products_terms = DB::table('product_terms')->orderBy('id', 'DESC')->get();
        return view('admin.product_terms.index', compact('products_terms'));
    }
    public function create(){
        return view('admin.product_terms.create');
    }
    public function store(Request $request){
     
        $this->validate($request,[
            'product_term' => 'required',
        ]);

        $product_terms =  new ProductTerms;
        $product_terms->product_term = $request->product_term;
        if ($product_terms->save()) {
         return back()->with('success','Product terms successfully saved.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function edit($id){
        $productTerm = ProductTerms::findOrFail($id);
        return view('admin.product_terms.edit', compact('productTerm'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'product_term' => 'required',
        ]);
        
        $product_terms = ProductTerms::findOrFail($id);
        $product_terms->product_term = $request->product_term;
        if ($product_terms->save()) {
         return redirect('/product-terms/all-product-terms')->with('success','Product terms successfully updated.');
        }
        else{
            return back()->with('failed','Something Error Found !, Please try again.');
        }
    }

    public function delete($id){

        $product_term = ProductTerms::findOrFail($id);
        if($product_term){
            $product_term->delete();
            return redirect()->back()->with('success','Product terms successfully deleted.');
        }else{
            return redirect()->back()->with('failed','Something Error Found !, Please try again.');
        }
    }
}
