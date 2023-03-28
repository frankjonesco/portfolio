<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Mail\ContactFormMailer;
use Illuminate\Support\Facades\Mail;

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

        Mail::raw('Hello world', function (Message $message) {
            $message->to('hello@frankjones.co')
                ->from('noreply@frankjones.co');
        });

        return back()->with('success', 'Your message was sent! I will be in touch.');
    }

    // Mail
    public function mail(Request $request)
    {

        $form_data = $request->validate([
            'name' => 'required|min:2|max:40',
            'phone' => 'max:20',
            'email' => 'required|email|max:60',
            'subject' => 'required|max:60',
            'body' => 'required|max:1000'
        ]);

        $to_name = 'Frank Jones';
        $to_email = 'frankjones.web@gmail.com';
        $data =  $form_data;

 
        Mail::send('/contact-form-mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('frankjones.co - New message');
            $message->from('noreply@frankjones.co', 'Contact page - frankjones.co');
        });
  
        return back()->with('success', 'Your message was sent! I will be in touch.');
    }

    // Show 'build'
    public function build(){
        return view('build');
    }


}
