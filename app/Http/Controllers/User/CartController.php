<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Cart;
use Session;

class CartController extends Controller
{
	public function cart()
	{
		if(!Session::has('cart'))
		{
			return view('client.cart', ['products' => null]);
		}
		$oldCart = Session::get('cart');
		$cart = new Cart($oldCart);
		return view('client.cart', ['products' => $cart->items, 'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice]);
	}

    public function add(Request $request, $id)
    {
    	$product = Product::find($id);
    	$oldCart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldCart);
    	$cart->add($product, $product->id);
    	$request->session()->put('cart', $cart);

    	return redirect()->route('cart');
    }

    public function delete(Request $request)
    {
    	$request->session()->forget('cart');

    	return redirect()->back();
    }

    public function removeItem($id)
    {
    	$old = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($old);
        $cart->removeItem($id);
        if(count($cart->items) > 0)
        {
            Session::put('cart',$cart);
        }
        else
        {
            Session::forget('cart');
        }
        
        return redirect()->back();
    }

    public function payment(){
    	return view('client.payment');
    }
}
