<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend/index');
});

Route::get('/registartionsss', 'App\Http\Controllers\backEnd\User\RegistrationController@index');
Route::get('/registartion', 'App\Http\Controllers\backEnd\User\RegistrationController@index');
Route::get('/admin-dashboard', 'App\Http\Controllers\backEnd\Admin\DashboardController@index');

//user route
Route::get('/work-station-setting', 'App\Http\Controllers\backEnd\Admin\WorkStationController@index');
Route::get('/package-setting', 'App\Http\Controllers\backEnd\Admin\PackageRateController@index');
Route::get('/wallet-setting', 'App\Http\Controllers\backEnd\Admin\WalletSettingController@index');
Route::get('/contact-inbox', 'App\Http\Controllers\backEnd\Admin\MailController@contact_inbox');
Route::get('/contact-sent', 'App\Http\Controllers\backEnd\Admin\MailController@contact_sent');
Route::get('/site-setting', 'App\Http\Controllers\backEnd\Admin\SiteSettingController@index');
Route::get('/admin-role-setting', 'App\Http\Controllers\backEnd\Admin\UserRoleController@index');



Route::get('/pending-users', 'App\Http\Controllers\backEnd\Admin\UserListController@pending_users');
Route::get('/active-users', 'App\Http\Controllers\backEnd\Admin\UserListController@active_users');
