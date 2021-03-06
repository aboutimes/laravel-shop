<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    // 用户管理
    $router->get('users', 'UsersController@index');
    // 商品管理
    $router->get('products', 'ProductsController@index');
    $router->get('products/create', 'ProductsController@create');
    $router->post('products', 'ProductsController@store');
    $router->get('products/{id}/edit', 'ProductsController@edit');
    $router->put('products/{id}', 'ProductsController@update');
    // 订单管理
    $router->get('orders', 'OrderController@index')->name('admin.orders.index');
    $router->get('orders/{order}', 'OrderController@show')->name('admin.orders.show');
    $router->post('orders/{order}/ship', 'OrderController@ship')->name('admin.orders.ship');
    // 退款
    $router->post('orders/{order}/refund', 'OrderController@handleRefund')
        ->name('admin.orders.handle_refund');
    // 优惠券
    $router->get('coupon_codes', 'CouponCodeController@index');
    $router->get('coupon_codes/create', 'CouponCodeController@create');
    $router->post('coupon_codes', 'CouponCodeController@store');
    $router->get('coupon_codes/{id}/edit', 'CouponCodeController@edit');
    $router->put('coupon_codes/{id}', 'CouponCodeController@update');
    $router->delete('coupon_codes/{id}', 'CouponCodeController@destroy');
});
