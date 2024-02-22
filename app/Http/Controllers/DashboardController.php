<?php

namespace App\Http\Controllers;


use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::user()->usertype!='user'){
            return redirect(route('admindashboard'));
        }
        else if(Auth::id()){
            $usertype=Auth()->user()->usertype;
            if($usertype=='user'){
                return view('dashboard');
            }
        }
    }
}
