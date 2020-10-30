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

Route::resource('home', 'User\HomeController', ['only' => 'index']);
Route::get('/', 'User\HomeController@top')->name('home.top');
Route::get('home/about', 'User\HomeController@about')->name('home.about');
Route::get('home/store_about', 'User\HomeController@store_about')->name('home.store_about');
Route::resource('contact', 'User\ContactController')->only(['create', 'store']);

Route::resource('cart', 'User\CartController')->only(['store', 'update', 'destroy']);

Route::resource('answer', 'User\AnswerController')->only(['index']);

Route::resource('item', 'User\ItemController')->only(['index', 'show']);

// ユーザー
Route::namespace('User')->prefix('user')->name('user.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:user')->group(function () {

        // TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
        
        Route::resource('order', 'OrderController')->only(['create', 'store']);
        Route::get('order/confirm', 'OrderController@confirm')->name('order.confirm');
        Route::get('order/finish', 'OrderController@finish')->name('order.finish');
        Route::get('order/about', 'OrderController@about')->name('order.about');

        Route::resource('delivery', 'DeliveryController')->only(['index', 'store', 'edit', 'update', 'destroy']);

        Route::resource('cart', 'CartController')->only(['index']);
        Route::resource('user', 'UserController')->only(['index']);
    });
});

// 管理者
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    // ログイン認証関連
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false
    ]);

    // ログイン認証後
    Route::middleware('auth:admin')->group(function () {

        // Route::get('item/create', 'ItemController@create')->name('item.create');
        
        Route::resource('home', 'HomeController')->only(['index']);
        Route::resource('item', 'ItemController');
        Route::resource('order', 'OrderController')->only(['index', 'show', 'update']);
        Route::resource('receipt', 'ReceiptController')->only(['index', 'store']);
        Route::resource('contact', 'ContactController')->only(['index', 'show', 'update']);
        Route::resource('answer', 'AnswerController')->only(['index', 'store', 'edit', 'update', 'destroy']);
    });

});

