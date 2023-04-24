<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('bar');
    }

    public function foo(){

        $this->registerPolicies();
        if(!Gate::allows('access-admin')){
            abort('403');
        }

        return view("welcome");
    }

    public function bar(){
        return view("bar");
    }

}
