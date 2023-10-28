<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller
{
    public function index () {
        $products = Product::all();
        $categories = Category::all();

        return view("home", compact('products', 'categories'));
    }

    public function singleProduct($slug) {
        $product = Product::where('slug', $slug)->first();

        return view('product-details', compact('product'));
    }

}
