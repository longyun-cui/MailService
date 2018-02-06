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

Route::match(['get','post'], '/email/send','MailController@send');



/*
 * softorg.cn
 */
Route::group(['prefix' => 'softorg'], function () {

    $controller = "SoftorgController";

    Route::match(['get','post'], 'change_captcha', $controller.'@change_captcha');
});



/*
 * Tables&Charts
 */
Route::group(['prefix' => 'table'], function () {

    $controller = "TableController";

    Route::match(['get','post'], 'test', $controller.'@test');
    Route::match(['get','post'], 'email/activation', $controller.'@send_email_activation');
});