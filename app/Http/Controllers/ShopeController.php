<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopeController extends Controller
{
    public function category(){
        return view("category");
    }
    public function checkout(){
        return view("checkout");
    }
    public function cart(){
        return view("cart");
    }
    public function confirmation(){
        return view("confirmation");
    }
}
