<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1()
    {
            return view('form1.form');
    }

    public function submitForm ()
    {
        return 'Done';
    }
}
