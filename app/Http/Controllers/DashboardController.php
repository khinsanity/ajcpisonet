<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('dashboard');
            }
            else{
                return view('admindashboard');
            }
           
        }
        
    }
    public function admindashboard(){
        if(Auth::id()){
          
            if($usertype=='admin'){
                return view('admindashboard');
            }
            else{
                return view('dashboard');
            }
        }
        
    }
}
