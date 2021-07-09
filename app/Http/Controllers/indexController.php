<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    //function
    public function index(Request $req){
        $req->session()->flush();
        return view('customer.home');
    }
}
