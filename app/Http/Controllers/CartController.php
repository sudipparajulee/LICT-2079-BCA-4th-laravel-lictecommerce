<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required',
            'qty' => 'required'
        ]);
        $data['user_id'] = Auth::id();

        Cart::create($data);
        return back()->with('success', 'Product added to cart successfully');
    }
}
