<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function get(){
        return view('register');
    }

    public function post(RegisterRequest $request){
        return view('home',['name' => $request->name]);
    }
}
