<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(4)->get();
        return view('welcome', compact('products'));
    }

    public function viewproduct($id)
    {
        $product = Product::find($id);
        return view('viewproduct', compact('product'));
    }
}
