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

Route::redirect('/', '/products')->name('home');

Auth::routes();

Route::get('/test', function (){
// 测试
    $a = \App\Models\User::find(1);
    dd($a->toJson());
})->name('test');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')
        ->name('email_verify_notice');
    Route::get('/email_verify_send', 'EmailVerificationController@send')
        ->name('email_verify_send');
    Route::get('/email_verify', 'EmailVerificationController@verify')
        ->name('email_verify');
    // 开始，邮箱验证
    Route::group(['middleware' => 'email_verified'], function() {
        //收货地址
        Route::get('user_addresses', 'UserAddressesController@index')
            ->name('user_addresses.index');
        Route::get('user_addresses/create', 'UserAddressesController@create')
            ->name('user_addresses.create');
        Route::post('user_addresses', 'UserAddressesController@store')
            ->name('user_addresses.store');
        Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')
            ->name('user_addresses.edit');
        Route::put('user_addresses/{user_address}', 'UserAddressesController@update')
            ->name('user_addresses.update');
        Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')
            ->name('user_addresses.destroy');
        // 收藏/取消收藏
        Route::get('products/favorites', 'ProductsController@favorites')
            ->name('products.favorites');
        Route::post('products/{product}/favorite', 'ProductsController@favor')
            ->name('products.favor');
        Route::delete('products/{product}/favorite', 'ProductsController@disfavor')
            ->name('products.disfavor');
        // 购物车
        Route::get('cart', 'CartController@index')->name('cart.index');
        Route::post('cart', 'CartController@add')->name('cart.add');
        Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
        // 订单
        Route::get('orders', 'OrderController@index')->name('orders.index');
        Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
        Route::post('order/store', 'OrderController@store')->name('order.store');
        // 付款
        Route::get('payment/{order}/alipay', 'PaymentController@payByAlipay')
            ->name('payment.alipay');
        Route::get('payment/alipay/return', 'PaymentController@alipayReturn')
            ->name('payment.alipay.return');

    });
    // 结束
});

// 商品
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::post('payment/alipay/notify', 'PaymentController@alipayNotify')->name('payment.alipay.notify');
