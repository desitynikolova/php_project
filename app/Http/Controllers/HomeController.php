<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;


class HomeController extends BaseController
{
    // for home page so that users can see products,categories in one place
    public function getAllProducts()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('home',compact('products','categories'));
    }
}