<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Cart;

class CartController extends Controller
{

    public function showCart()
    {
        
        $totalcart = Cart::content();
        
        $totalprice = Cart::subtotal();
        
        return view('shop.cart',  compact('totalcart', 'totalprice'));
    }


    public function addCart($id)
    {
        $products = Product::find($id);
        
        $result = Cart::add([
            'id' => $id,
            'name' => $products->title,
            'qty' => 1,
            'price' => $products->price,
            ]);

        return redirect()->route('shop.index');
        
        
    }

    public function addQtCart($id)
    {
        $item = Cart::get($id);
        
        Cart::update($id, $item->qty + 1);
        
        return redirect()->back();
    }


    public function removeCart($id)
    {
        $item = Cart::get($id);
        
        Cart::update($id, $item->qty - 1);
        
        return redirect()->back();
        
    }
    
    
    public function removethisCart($id)
    {
         Cart::remove($id);
        
        return redirect()->back();
        
    }

    public function removeallCart()
    {
        Cart::destroy();
        
        return redirect()->route('shop.index');
    }
    
    public function checkoutCart()
    {
        $allcheckout = Cart::content();
        
        $totalcheckout = Cart::subtotal();
        
        return view('shop.checkout', compact('allcheckout', 'totalcheckout'));
    }
}
