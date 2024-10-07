<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->take(6)->get();
        $products = Product::latest()->take(8)->get();
        // return response()->json($products);
        return view('web.pages.home.index', compact('categories', 'products'));
    }
}
