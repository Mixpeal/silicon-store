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
Auth::routes();

Route::get('/', 'SiliconController@index');
Route::get('/home', 'HomeController@index');
Route::get('/add_cart/{id}', 'SiliconController@add_cart');
Route::get('/cart/remove/{id}', 'SiliconController@remove_cart');
Route::get('/empty-cart', 'SiliconController@empty_cart');
Route::get('/cart', 'SiliconController@cart_items');
Route::post('/update-cart', 'SiliconController@update_cart');
Route::get('/product-detail/{id}', 'SiliconController@product_detail');
Route::get('/product/tag/{id}', 'SiliconController@product_tag');
Route::get('/product/category/{id}', 'SiliconController@product_category');

Route::get('social/login/redirect/{provider}', ['uses' => 'Auth\AuthController@redirectToProvider', 'as' => 'social.login']);
Route::get('social/login/{provider}', 'Auth\AuthController@handleProviderCallback');

Route::get('/profile', 'HomeController@show_profile');
Route::get('/check-out', 'HomeController@check_out');
Route::post('/checkout-now', 'HomeController@check_out_now');
Route::get('/success', 'HomeController@success');

/* Admin Area */


Route::get('/admin', 'HomeController@admin_index');
Route::get('/admin/products', 'HomeController@products');
Route::get('/admin/new-product', 'HomeController@add_product');

Route::post('/admin/add-product', 'HomeController@store_product');
Route::get('/admin/product/remove/{id}', 'HomeController@remove_product');
Route::post('/admin/update_product', 'HomeController@update_product');
Route::get('/admin/new-bulk-product', 'HomeController@add_bulk_product');
Route::post('/admin/store-bulk-product', 'HomeController@store_bulk_product');

// product category
Route::get('/admin/categories', 'HomeController@categories');
Route::get('/admin/category/remove/{id}', 'HomeController@remove_category');
Route::post('/admin/add_category', 'HomeController@add_category');
Route::post('/admin/update_category', 'HomeController@update_category');
// products tags
Route::get('/admin/tags', 'HomeController@tags');
Route::get('/admin/tag/remove/{id}', 'HomeController@remove_tag');
Route::post('/admin/add_tag', 'HomeController@add_tag');
Route::post('/admin/update_tag', 'HomeController@update_tag');
// users/customers
Route::get('/admin/users', 'HomeController@system_users');
Route::get('/admin/user/remove/{id}', 'HomeController@remove_user');
Route::post('/admin/add_user', 'HomeController@add_user');
Route::post('/admin/update_user', 'HomeController@update_user');

Route::get('/admin/income', 'HomeController@income');

// settings
Route::get('/admin/general-setting', 'HomeController@general_setting');
Route::get('/admin/payment-setting', 'HomeController@payment_setting');

Route::group(['middleware' => ['web']], function () {
    Route::get('payPremium', ['as'=>'payPremium','uses'=>'PaypalController@payPremium']);
    Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);
    Route::get('getDone', ['as'=>'getDone','uses'=>'PaypalController@getDone']);
    Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);
});