<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        $productNO = Product::count('id');
        $categoryNO = Category::count('id');
        $userNO = User::count('id');
        return view('Admin.dashboard',compact('productNO','categoryNO','userNO'));
    }


}
