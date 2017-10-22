<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Get all products
Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as'=> 'shop.index'
    ]);

// Signup 
Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as'=> 'user.signup'
    ]);
    
Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as'=> 'user.signup'
    ]);

// add products to the cart
Route::get('/add/{id}', [
    'uses' => 'CartController@addCart',
    'as'=> 'cart.add'
    ]);

// show all cart products
Route::get('/cart/show', [
    'uses' => 'CartController@showCart',
    'as'=> 'cart.show'
    ]);
    
// add quantity of one product in cart page
Route::get('/cart/addqt/{id}', [
    'uses' => 'CartController@addQtCart',
    'as'=> 'cart.addqt'
    ]);
    
// decrease quantity of one product in cart page
Route::get('/cart/remove/{id}', [
    'uses' => 'CartController@removeCart',
    'as'=> 'cart.remove'
    ]);
    
// remove a product from cart page
Route::get('/cart/removethis/{id}', [
    'uses' => 'CartController@removethisCart',
    'as'=> 'cart.removethis'
    ]);
    
// remove all items from cart
Route::get('/cart/removeall/', [
    'uses' => 'CartController@removeallCart',
    'as'=> 'cart.removeall'
    ]);
        
// remove all items from cart
Route::get('/cart/checkout/', [
    'uses' => 'CartController@checkoutCart',
    'as'=> 'cart.checkout'
    ]);
    

