<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//notfound page
Route::get('/notfound', 'NotFoundPageController@index')->name('not.found');

Route::get('/', 'LandingPageController@index')->name('landing-page');

//wishlist
Route::get('/wishlist', 'LandingPageController@wishlist')->name('landing-page.wishlist')->middleware('auth');

//user profile
Route::get('/user/my_profile/{id}/{name}', 'ProfileUserController@profilePage')->name('user.profile');
Route::patch('/user/my_profile/{avatarImg}/img', 'ProfileUserController@updateAvatarImg')->name('user.profile.img');
Route::patch('/user/my_profile/{userInfo}/info', 'ProfileUserController@updateUserInfo')->name('user.profile.info');
Route::patch('/user/my_profile/{userPassword}/password', 'ProfileUserController@updateUserPassword')->name('user.profile.password');

Route::resource('category', 'CategoryController');

Route::get('/shop/','ShopController@index')->name('shop.index');
Route::get('shop/{product}','ShopController@show')->name('shop.show');
Route::get('/shop/category/{catId}/{catSlug}','Shopcontroller@shopFeatured')->name('shop.shopFeatured');
Route::get('/shop/category/sub-category/{categoryId}/{categorySlug}', 'ShopController@shopByCategory')->name('shop.shopByCategory');

Route::get('/find/product', 'SearchController@search')->name('product.search');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/addItem/{id}', 'CartController@addItem')->name('cart.addItem');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::put('cart/update/{id}', 'cartController@update')->name('cart.update');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::post('/coupon', 'CouponController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponController@destroy')->name('coupon.destroy');

Route::get('/confirmation', 'ConfirmationController@index')->name('confirmation.index');

Route::get('/thank', 'ConfirmationController@index')->name('confirmation.index');



Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@returnAdminLoginPage')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@postLogin')->name('admin.auth.login');
});


//route for admin area
Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@returnDashboard')->name('admin.dashboard');
    Route::get('/dashboard', 'AdminController@returnDashboard')->name('admin.dashboard');
    Route::get('register', 'AdminController@returnAdminRegisterPage')->name('admin.register');
    Route::post('register', 'AdminController@postRegister')->name('admin.auth.register');
    Route::post('logout', 'Auth\AdminLoginController@adminLogout')->name('admin.auth.logout');

    Route::middleware(['admin'])->group(function () {

        Route::get('/category/list', 'CategoryController@categoryList')->name('category.categoryList');
        Route::get('/category/form', 'CategoryController@categoryForm')->name('category.categoryForm');
        Route::post('/category/form', 'CategoryController@store')->name('category.store');
        Route::get('/product/form', 'ProductController@returnProductForm')->name('product.returnProductForm');
        Route::post('/product/form', 'ProductController@store')->name('product.store');
        Route::get('/product/list', 'ProductController@index')->name('product.index');
        Route::get('/product/show/{id}/{product}', 'ProductController@show')->name('product.show');
        Route::patch('/product/update/{product}', 'ProductController@edit')->name('product.update');
        Route::delete('/product/destroy/{product}', 'ProductController@deleteProduct')->name('product.destroy');
        Route::get('/user/list', 'UserController@index')->name('user.index');
        Route::get('/user/check/detail/{id}/{name}', 'UserController@checkUserDetail')->name('user.checkProfile');
        Route::get('/user/check/detail/{id}/{name}/order', 'UserController@checkOrderHistory')->name('user.ordering');
        Route::get('/user/check/detail/{id}/{name}/order/invoice/{array}', 'UserController@getInvoice')->name('user.invoice');

    });



});


