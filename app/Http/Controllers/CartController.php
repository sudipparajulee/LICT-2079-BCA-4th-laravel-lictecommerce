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

    public function mycart()
    {
        $carts = Cart::where('user_id', Auth::id())->get();
        foreach($carts as $cart){
            if($cart->product->discounted_price == '')
            {
                $cart->total = $cart->product->price * $cart->qty;
            }
            else
            {
                $cart->total = $cart->product->discounted_price * $cart->qty;
            }
        }
        return view('mycart', compact('carts'));
    }

    public function destroy($id)
    {
        Cart::find($id)->delete();
        return back()->with('success', 'Product removed from cart successfully');
    }
}
