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

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'discounted_price' => 'nullable|numeric|lt:price',
            'stock' => 'required|numeric',
            'status' => 'required',
            'photopath' => 'required|image',
        ]);

        //store picture
        $photo = $request->file('photopath');
        $photoname = time() . '.' . $photo->extension();
        $photo->move(public_path('images/products'), $photoname);
        $data['photopath'] = $photoname;

        Product::create($data);
        return response()->json([
            'message' => 'Product Created Successfully',
            'product' => $data
        ], 201);
    }
}
