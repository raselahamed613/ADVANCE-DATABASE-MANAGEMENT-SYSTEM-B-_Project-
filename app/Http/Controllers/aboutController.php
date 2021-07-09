<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    //method
    public function about(){
        return view ('customer.about');
       
    }
}
