<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::latest()->get();
        return view('orders.index',compact('orders'));
    }

    public function store(Request $request, $cartid)
    {
        $data = $request->data;
        $data = base64_decode($data);
        $data = json_decode($data);
        if($data->status == 'COMPLETE')
        {
            //store order here
            $cart = Cart::find($cartid);
            $data = [
                'user_id' => $cart->user_id,
                'product_id' => $cart->product_id,
                'qty' => $cart->qty,
                'price' => $cart->product->price,
                'payment_method' => 'Esewa',
                'name' => $cart->user->name,
                'phone' => '987654334567',
                'address' => 'Kathmandu',
            ];
            Order::create($data);
            $cart->delete();
            return redirect(route('home'))->with('success', 'Order placed successfully');
        }
    }
}
