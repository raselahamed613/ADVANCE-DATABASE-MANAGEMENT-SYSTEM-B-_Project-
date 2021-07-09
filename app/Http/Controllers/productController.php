<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function product()
    {
        return view('customer.product');
    }
    public function products()
    {
        $asus = product::all();
        //dd($asus);
        return view('customer.product', compact('asus'));
    }
   

    //...product details....
    public function productdet($id)
    {
        $product_details = product::find($id);
        return view('customer.productdetails',compact("product_details"));
    }
}
