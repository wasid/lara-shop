<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Cart;

class ProductController extends Controller
{
    public function getIndex(){
        
        $products = Product::all();
        
        $cart = Cart::count();
        
        return view('shop.index',  compact('products', 'cart'));
        
    }
    public function getSignup(){
        
       return view('user.signup');
        
    }
}
