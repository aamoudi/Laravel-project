<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->limit(8)->get();
        return view('home', compact('products'));
    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        return view("single-product", compact('product', 'category'));
    }

    public function add_comment(Request $request, $id)
    {
        $comment = Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'comment' => $request->comment,
            'product_id' => $id
        ]);
        return redirect()->back();
    }

}
