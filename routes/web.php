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
//frontend
Route::get('/', function () { return view('frontend/index');});
Route::get('/login-panel', function () { return view('frontend/login');});
Route::get('/registration', function () { return view('frontend/registration');});

//admin section
Route::get('/admin-login', 'App\Http\Controllers\backEnd\Admin\AdminLoginController@index');
Route::get('/admin-dashboard', 'App\Http\Controllers\backEnd\Admin\DashboardController@index');


//admin section route
Route::get('/work-station-setting', 'App\Http\Controllers\backEnd\Admin\WorkStationController@index');

//package setting ------------------
Route::get('/package-setting', 'App\Http\Controllers\backEnd\Admin\PackageRateController@index');
Route::post('/save-package', 'App\Http\Controllers\backEnd\Admin\PackageRateController@save_package');
Route::get('/delete-package/{id}', 'App\Http\Controllers\backEnd\Admin\PackageRateController@delete_package');

//wallet setting -------------------
Route::get('/wallet-setting', 'App\Http\Controllers\backEnd\Admin\WalletSettingController@index');
Route::post('/update-wallet', 'App\Http\Controllers\backEnd\Admin\WalletSettingController@update_wallet');




Route::get('/contact-inbox', 'App\Http\Controllers\backEnd\Admin\MailController@contact_inbox');
Route::get('/contact-sent', 'App\Http\Controllers\backEnd\Admin\MailController@contact_sent');
Route::get('/site-setting', 'App\Http\Controllers\backEnd\Admin\SiteSettingController@index');
Route::get('/admin-role-setting', 'App\Http\Controllers\backEnd\Admin\UserRoleController@index');
Route::get('/new-users', 'App\Http\Controllers\backEnd\Admin\UserListController@new_users');
Route::get('/pending-users', 'App\Http\Controllers\backEnd\Admin\UserListController@pending_users');
Route::get('/active-users', 'App\Http\Controllers\backEnd\Admin\UserListController@active_users');

//user section route

Route::get('/user-wallet', 'App\Http\Controllers\backEnd\User\DashboardController@index');
Route::get('/user-profile', 'App\Http\Controllers\backEnd\User\UserProfileController@index');
Route::get('/user-buy-package', 'App\Http\Controllers\backEnd\User\UserPackageController@index');
Route::get('/user-add-member', 'App\Http\Controllers\backEnd\User\AddMembersController@index');
Route::get('/user-work-station', 'App\Http\Controllers\backEnd\User\WorkStationController@index');


