<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::where('user_id', Auth::id())->with('product')->get();
        return response()->json([
            'status' => 200,
            'carts' => $carts,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'qty' => 'required'
        ]);

        $data['user_id'] = Auth::id();

        Cart::create($data);
        return response()->json([
            'status' => 200,
            'message' => 'Product added to cart successfully',
        ]);
    }
}
