<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site2Controller extends Controller
{
   public function index()
   {
        $title='Haitham Mohmmed';
        $subtitle='This is a new website';
        return view('site2.index',compact('title','subtitle'));
   }

   public function about()
   {
        return view('site2.about');
   }

   public function post($title)
   {
        return view('site2.post')->with('title',$title);
   }

   public function contact()
   {
        return view('site2.contact');
   }
}
