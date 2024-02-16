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
                if(Auth::user()->usertype!='user'){
                    return redirect(route('admindashboard'));
                }
                return view('dashboard');
            }              
        }
        
    }
    public function admindashboard(){
        if(Auth::user()->usertype!='admin'){
            return redirect(route('dashboard'));
        }
        $usertype=Auth()->user()->usertype;
        if(Auth::id()){
            if($usertype=='admin'){
                return view('admindashboard');
            }
        }
        
    }
}
