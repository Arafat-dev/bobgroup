<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){

        return view('index');
    }


    public function contact(){

        return view('contact');
    }


    public function connexion(){

        return view('auth.login');
    }


    public function services(){

        return view('services');
    }

    public function membres(){

        return view('membres');
    }

    public function propos(){

        return view('apropos');
    }
}
