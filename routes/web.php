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


use Illuminate\Support\Facades\Route;

// for Auth Owner
Route::get('/login', 'OwnerLoginController@showLoginForm')->name('loginOwner');
Route::post('/login', 'OwnerLoginController@login');
Route::get('/logout', 'OwnerLoginController@logout');


//for Auth User
Route::get('/user/login', 'UserLoginController@showLoginForm');
Route::post('/user/login', 'UserLoginController@login')->name('login');
Route::get('/user/logout', 'UserLoginController@logout');


//for Gust user
Route::get('/','SiteController@siteGust');

Route::get('/user/register', 'UserController@register');
Route::post('/user/register', 'UserController@store');

Route::get('/home/items','SiteController@posts');


//only loggedIn User
route::group(["middleware" => "auth:user"], function () {
    Route::get('/user','SiteController@siteUser');
    Route::post('/user/cart','CartController@cart');

    Route::get('/order/create', 'OrderController@createNewOrder');
    Route::post('/order/create/new', 'OrderController@storeNew');

    Route::get('/user/dataJson','SiteController@dataJson');

});


//only loggedIn Owner
route::group(['prefix' => 'dashboard', "middleware" => "auth:owner"], function () {
    Route::get('/','SiteController@siteOwner');

    Route::resource('items', 'ItemController');
    Route::resource('categories', 'CategoryController');
    Route::get('users', 'UsersController@getAllUsers');

});