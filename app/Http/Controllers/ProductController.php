<?php

namespace App\Http\Controllers;

use App\Models\Product_categories;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function getall()
    {
        $products = Product::all();
        return view('layouts/product',compact('products'));
    }
    public function getById($id)
    {
        //Get Current Category By Id
        $product = Product::where('id', $id)
                        ->first();

        //CATEGORIES
        //Get Id's of Matching Categories
        $product_categories = Product_categories::where('product_id', $id)
                        ->pluck('category_id');

        //Link
        $categories = array();
        foreach($product_categories as $product_category)
        {
        $categories[] = Category::all()->where('id', (int)$product_category);
        }

        //Categories
        //Get Id's of Matching Categories
        $product_categories = Product_categories::where('product_id', $id)
                        ->pluck('category_id');

        //Link
        $categories = array();
        foreach($product_categories as $product_category)
        {
        $categories[] = Category::all()->where('id', (int)$product_category);
        }
        return view('layouts.partials.products.current-product', compact('product','categories'));
    }

    public function searchByDate(Request $request){
        // Get the search value from the request
        $search = $request->input('search-date');

        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('created_at', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('layouts/product', compact('products'));
    }

    public function searchByTitle(Request $request){
        // Get the search value from the request
        $search = $request->input('search-title');

        // Search in the title and body columns from the posts table
        $products = Product::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('layouts/product',compact('products'));
    }

    public function searchByCategory(Request $request){
        $categories = Category::all();
        return view('layouts/search',compact('categories'));
    }
}