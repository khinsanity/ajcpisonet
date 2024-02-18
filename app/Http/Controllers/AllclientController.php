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
}
