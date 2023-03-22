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


    // Send contact form message
    public function sendContactFormMessage(Request $request){
        
        $form_data = $request->validate([
            'name' => 'required|min:2|max:40',
            'phone' => 'max:20',
            'email' => 'required|email|max:60',
            'subject' => 'required|max:60',
            'message' => 'required|max:1000'
        ]);

        
    }

    // Show 'FAQs'
    public function faq(){
        return view('faq');
    }
}
