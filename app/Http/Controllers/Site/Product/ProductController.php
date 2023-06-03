<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest('id')->get();
        return view('site.products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('site.product',compact('product'));
    }
}
