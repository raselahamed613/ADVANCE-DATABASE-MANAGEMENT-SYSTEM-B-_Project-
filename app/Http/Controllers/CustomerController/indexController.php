<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //function
    public function index(){
        return view('customer.index');
    }
}
