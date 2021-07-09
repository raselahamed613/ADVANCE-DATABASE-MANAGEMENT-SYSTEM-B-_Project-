<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\refand;
use Illuminate\Http\Request;
use App\Models\shop;
use App\Models\review;
use App\Http\Requests\RefandRequest;
use App\Http\Requests\ReviewRequest;
use Carbon\carbon;

class shopsController extends Controller
{


    //start shop part.....--
    public function shop()
    {
        $var = shop::all();
        // dd($var);
        return view('customer.allshops', compact('var'));
    }
    //end shop part......

    //start campaigns part.....
    public function camp()
    {
        return view('customer.campaigns');
    }
    //start cart part...
    public function cart(Request $request)
    {
        if (!empty($request->session()->get('name'))) {
            $cart_item = cart::where("customer_id", $request->session()->get('id'))->get();
            return view('customer.cart',compact("cart_item"));
        } else {
            return redirect("/login");
        }
    }
    //end cart  part...
    //start checkout part...
    public function check()
    {
        return view('customer.checkout');
    }
    //end checkout part...

    // review controller..
    public function review(ReviewRequest $request)
    {
        //insert
        review::insert([
            'customer_name' => $request->customer_name,
            'product_id' => $request->product_id,
            'product_catagory' => $request->product_catagory,
            'product_review' => $request->product_review,
            'created_at' => Carbon::now()
        ]);
        return redirect('/dashboard');
    }

    //refand controller
    public function refand(RefandRequest $request)
    {
        //insert
        refand::insert([
            'invoice' => $request->invoice,
            'payment_ethode' => $request->payment_method,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return redirect('/contact');
    }
}
