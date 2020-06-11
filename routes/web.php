<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing_page');
});

//Route::get('/cart', function () {
//    return view('pages.shopping_cart');
//});

Route::get('/detail', function () {
    return view('pages.product_detail');
});

//Route::get('/shop', function () {
//    return view('pages.shop');
//});

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/contact', function () {
    return view('pages.contact_us');
});

Route::get('/notfound', function () {
    return view('pages.pagenotfound');
})->name('not.found');

//testing
Route::resource('category', 'CategoryController');

Auth::routes();

//official route
//LandingPageController [partial]
Route::get('/', 'LandingPageController@index')->name('landing-page');
Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('shop/{product}','ShopController@show')->name('shop.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');


Route::prefix('admin')->group(function() {

    Route::get('login', 'Auth\AdminLoginController@returnAdminLoginPage')->name('admin.login');
    Route::post('login', 'Auth\AdminLoginController@postLogin')->name('admin.auth.login');
});


//route for admin area
Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@returnDashboard')->name('admin.dashboard');
    Route::get('/dashboard', 'AdminController@returnDashboard')->name('admin.dashboard');

    Route::get('register', 'AdminController@returnAdminRegisterPage')->name('admin.register');
    Route::post('register', 'AdminController@postRegister')->name('admin.auth.register');
    Route::post('logout', 'Auth\AdminLoginController@adminLogout')->name('admin.auth.logout');

    Route::middleware(['admin'])->group(function () {

    });

});


