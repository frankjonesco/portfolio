<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Show hompage
    public function home(){
        return view('home');
    }


    // Show 'How it works'
    public function howItWorks(){
        return view('how-it-works');
    }


    // Show 'FAQs'
    public function faq(){
        return view('faq');
    }
}
