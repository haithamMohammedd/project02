<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index() {
        return 'home page';
    }

    function about() {
        return 'about page';
    }


    function contact() {
        return 'contact page';
    }


}
