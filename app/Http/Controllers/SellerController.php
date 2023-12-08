<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Carbon;


class SellerController extends Controller
{
    // Seller login form view
    public function Index()
    {
        return view('seller.seller_login');
    }

     // Admin Dahaboard view
     public function Dashboard()
     {
         return view('seller.index');
     }


      // Seller login form view
    public function Login(Request $request)
    {
        // dd($request->all());

        $check = $request->all();
        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('seller.dashboard')->with('error', 'Seller Login Succesfully');
        } else {
            return back()->with('error', 'Invalid Email Or Password');
        }
    }//end method


    
    public function SellerLogout(){

        Auth::guard('seller')->logout();
        return redirect()->route('seller_login_form')->with('error','Seller Logout Successfully');
    }//end method 

    public function SellerRegister(){

        return view('seller.seller_register');
    }//end method 


    public function SellerRegisterCreate(Request $request){

        // dd($request->all());

        Seller::insert([


            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('seller_login_form')->with('error', 'Seller Created Succesfully');

    }








}
