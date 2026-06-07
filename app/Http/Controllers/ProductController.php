<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show(){
        $data=Product::all();
       
        return view('product',['products'=>$data]);
     
    }

    function delete($id){
      try {
       echo $id;
        $product=Product::find($id);
        if($product){
            $product->delete();
               toastr()->success('Product delete successfully');
            return redirect('/')->with('success', 'Product deleted successfully');
        }
      } catch (\Exception $e) {
        return redirect('/')->with('error', 'Failed to delete product: ' . $e->getMessage());
      }
        
    }

    function edit($id){
        try{
            
             $product = Product::findOrFail($id);
            
            if($product){
               return view('edit_product', compact('product'));
             }else{
                return redirect('/')->with('error', 'Product not found');
             }
            
        }catch(\Exception $e){
            return redirect('/')->with('error', 'Failed to edit product: ' . $e->getMessage());
        }
    }

    public function update(Request $req, $id)
{
    try {

        $product = Product::findOrFail($id);

        $product->name = $req->name;
        $product->price = $req->price;
        $product->stock = $req->stock;
        $product->description = $req->description;

        $product->save();

        toastr()->success('Product updated successfully');

        return redirect('/')->with('success', 'Product updated successfully');

    } catch (\Exception $e) {

        return redirect('/')->with('error', 'Failed to update product: ' . $e->getMessage());
    }
}
}
