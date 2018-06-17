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

Route::get('/', 'PagesController@home')->name('home');

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
    });
    // 结束
});
