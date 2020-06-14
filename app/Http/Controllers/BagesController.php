<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BagesController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function tracking(){
        return view('tracking');
    }
    public function elements(){
        return view('elements');
    }
}
