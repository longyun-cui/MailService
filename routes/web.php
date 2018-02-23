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

//    Route::match(['get','post'], 'test', $controller.'@test');
    Route::match(['get','post'], 'email/activation', $controller.'@send_email_activation');
    Route::match(['get','post'], 'activity/apply/activation', $controller.'@send_activity_apply_activation');
});



/*
 * Courses
 */
Route::group(['prefix' => 'course'], function () {

    $controller = "CourseController";

//    Route::match(['get','post'], 'test', $controller.'@test');
    Route::match(['get','post'], 'email/activation', $controller.'@send_email_activation');
});


/*
 * Products
 */
Route::group(['prefix' => 'product'], function () {

    $controller = "ProductController";

//    Route::match(['get','post'], 'test', $controller.'@test');
    Route::match(['get','post'], 'user/email/activation', $controller.'@send_user_email_activation');
    Route::match(['get','post'], 'admin/email/activation', $controller.'@send_admin_email_activation');
});



/*
 * Tables & Charts
 */
Route::group(['prefix' => 'table'], function () {

    $controller = "TableController";

//    Route::match(['get','post'], 'test', $controller.'@test');
    Route::match(['get','post'], 'email/activation', $controller.'@send_email_activation');
});