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

Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as'=> 'shop.index'
    ]);
Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as'=> 'user.signup'
    ]);
Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as'=> 'user.signup'
    ]);

Route::get('/add/{id}', [
    'uses' => 'CartController@addCart',
    'as'=> 'cart.add'
    ]);

Route::get('/cart/show', [
    'uses' => 'CartController@showCart',
    'as'=> 'cart.show'
    ]);
    

Route::get('/cart/addqt/{id}', [
    'uses' => 'CartController@addQtCart',
    'as'=> 'cart.addqt'
    ]);
    

Route::get('/cart/remove/{id}', [
    'uses' => 'CartController@removeCart',
    'as'=> 'cart.remove'
    ]);
    

Route::get('/cart/removethis/{id}', [
    'uses' => 'CartController@removethisCart',
    'as'=> 'cart.removethis'
    ]);
    

Route::get('/cart/removeall/', [
    'uses' => 'CartController@removeallCart',
    'as'=> 'cart.removeall'
    ]);
    

