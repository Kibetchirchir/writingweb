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

Route::get('/', function () {
    return view('welcome');
});

/**
 * the order form
 */

Route::get('/order', function () {
    return view('order');
});

/**
 * post order
 */

Route::post('/order/post', [
    'as' => 'orderPost',
    'uses' => 'orderControler@CreateOrder',
]);

Route::get('/paypall', function () {
    return view('pay');
});