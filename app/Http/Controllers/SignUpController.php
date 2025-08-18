<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function create()
    {
        // return 'index';
        return view('auth.signup');
        // return View::make('home.about');
    }
}
