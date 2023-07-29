<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home($name,$age) {
        return view('home.home',compact('name','age'));
    }

    function color($color) {

        if($color == "blue"){
            $msg = 'The Color is Blue';
            $type = 'primary';
        }else {
            $msg = 'The Color is Not Blue';
            $type = 'danger';
        }

        return view('color',compact('msg','type'));
    }
}
