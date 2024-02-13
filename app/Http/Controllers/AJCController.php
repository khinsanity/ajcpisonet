<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class AJCController extends Controller
{
    public function internet(): View
    {
        return view('include.internet');
    }
}
