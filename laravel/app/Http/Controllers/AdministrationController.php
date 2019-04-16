<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    
     /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
        {
            $this->middleware('auth');
        }
    //
    public function index()
    {   
        if(!Auth::guest()){
            if(auth()->user()->role_id !== 3){
                return view('administration.dashboard');
            }
        }
    }
}
