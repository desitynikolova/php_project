<?php

namespace App\Http\Controllers;

use App\Models\Product_categories;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Routing\Controller as BaseController;


class CategoryController extends BaseController
{
    public function getall()
    {
        $categories = Category::all();
        return view('layouts/category',array('categories'=>$categories));
    }
    public function getById($id)
    {
        //Get Current Category By Id
        $category = Category::where('id', $id)
                        ->first();

        //Get Id's of Matching Products
        $product_categories = Product_categories::where('category_id', $id)
                        ->pluck('product_id');

        //Link
        $products = array();
        foreach($product_categories as $product_category)
        {
        $products[] = Product::all()->where('id', (int)$product_category);
        }
        return view('layouts.partials.categories.current-category', compact('category','product_categories','products'));
    }
}