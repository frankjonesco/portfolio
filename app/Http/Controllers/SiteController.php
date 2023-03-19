<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Show hompage
    public function home(){
        return view('home');
    }
}
