<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/notfound', function () {
    return view('pages.pagenotfound');
})->name('not.found');
Route::get('/', 'LandingPageController@index')->name('landing-page');

Route::resource('category', 'CategoryController');

Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('shop/{product}','ShopController@show')->name('shop.show');
Route::get('/shop/category/{catId}/{catSlug}','Shopcontroller@shopFeatured')->name('shop.shopFeatured');
Route::get('/shop/category/sub-category/{categoryId}/{categorySlug}', 'ShopController@shopByCategory')->name('shop.shopByCategory');


Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/addItem/{id}', 'CartController@addItem')->name('cart.addItem');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::put('cart/update/{id}', 'cartController@update')->name('cart.update');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/confirmation', 'ConfirmationController@index')->name('confirmation.index');

Route::get('/thank', 'ConfirmationController@index')->name('confirmation.index');



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


