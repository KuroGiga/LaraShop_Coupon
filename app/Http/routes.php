<?php

Route::get('/', function () {
    return redirect('shop');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');
Route::delete('finish' , 'CartController@finish');

Route::resource('coupons', 'CouponsController');
Route::get('couponsR', 'CouponsController@store');
Route::delete('couponsD', 'CouponsController@destroy');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');


