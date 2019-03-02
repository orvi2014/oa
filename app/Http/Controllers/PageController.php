<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // PageView Function
    public function getHome(){
      return view('home');
    }
    public function getContact(){
      return view('contact');
    }
    public function getAbout(){
      return view('about');
    }
    public function getWork(){
      return view('work');
    }
    public function sendEmail(Request $request){
        
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required'
      ]);

      Mail::send('email.contact-message',
      [
        'msg'=>$request->message,
         'email'=>$request->email
      ], function($mail) use($request){
         $mail->from($request->email, $request->name);
         $mail->to('services.oabd@gmail.com')->subject('O.A Contact Message');
      });
      return redirect()->back()->with('flash_message','Thank You for your message, O.A team will contact with you soon');
    }
}
