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
//    $a=route_class();
//    return $a;
    $a = \App\Models\User::find(1);
    dd($a->toJson());
})->name('test');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/email_verify_notice', 'PagesController@emailVerifyNotice')->name('email_verify_notice');
    // 开始，邮箱验证
    Route::group(['middleware' => 'email_verified'], function() {
        Route::get('/testss', function() {
            return 'Your email is verified';
        });
    });
    // 结束
});
