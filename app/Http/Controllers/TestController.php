<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        return'index page';
    }

    public function about()
    {
        return'about page';
    }

    public function contact()
    {
        return'contact page';
    }
}
