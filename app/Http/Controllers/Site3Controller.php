<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site3Controller extends Controller
{
    public function index()
    {
            return view('site3.index');
    }

    public function resume()
    {
            return view('site3.resume');
    }

    public function projects()
    {
            return view('site3.projects');
    }

    public function contact()
    {
            return view('site3.contact');
    }

}
