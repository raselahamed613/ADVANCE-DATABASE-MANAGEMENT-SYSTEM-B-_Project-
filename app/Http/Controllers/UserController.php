<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserLogin;
use App\Models\room;
use Carbon\carbon;
use Validator;




class UserController extends Controller
{
    // <start login page>...
    public function log()
    {
        return view('customer.login');
    }
    public function loginVerify(UserLogin $req)
    {
        // $req->validate([
        //     'register_id'=>'required',
        //     'register_password'=>'required'
        //  ]);

        //.......sir <code class="
        // dd($req->all());
        $result = DB::table('rooms')
            ->where('name', $req->register_id)
            ->where('passwoard', $req->register_password)
            ->first();
        // dd($result);
        //(isset($result->name))
        if (isset($result)) {
            $req->session()->put('name', $result->name);
            $req->session()->put('id', $result->id);
            //set session or cookie
            
            return redirect('/dashboard');
        } else {
            $req->session()->flash('msg', 'Invalid username or password!');
            return redirect('/login');
        }
        //-----sir code end

    }
    // <end start login page>...
    //start register page work..............
    //method
    public function reg()
    {
        return view('customer.register');
    }
    //start customer register ....
    public function store(UserRequest $request)
    {
        //insert
        Room::insert([
            'name' => $request->user_name,
            'address' => $request->user_address,
            'dob' => $request->user_dob,
            'contact_number' => $request->user_mob,
            'email' => $request->user_email,
            'passwoard' => $request->user_password,
            'created_at' => Carbon::now()
        ]);
        return redirect('/login');
    }
    //end customer register...

    //validation
    public function verify(UserRequest $req)
    {


        //working validation....


    }

    //end register page work...........
}
