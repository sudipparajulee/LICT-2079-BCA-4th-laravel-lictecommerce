<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function latest()
    {
        $products = Product::latest()->limit(8)->get();
        return response()->json($products);
    }

    public function viewproduct($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }
}
