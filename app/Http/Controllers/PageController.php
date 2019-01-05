<?php

namespace App\Http\Controllers;

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
}
