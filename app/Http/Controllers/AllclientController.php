<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllclientController extends Controller
{
    public function index(){
        return view('include.index');
    }
    public function createclient(){
        return view('include.createclient');
    }
    public function storeclient(Request $request){
        $request->validate([
            'fullname' => 'required',
            'address' => 'required',
            'plan' => 'required',
            'accountNumber' => 'required'
        ]);
        Allclient::create([
            'fullname' => 'required',
            'address' => 'required',
            'plan' => 'required',
            'accountNumber' => 'required'
        ]);
        return redirect('createclient')->with('status','Client Added');

    }
}
