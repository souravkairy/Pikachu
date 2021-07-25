<?php
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/password/change', [HomeController::class, 'changePassword'])->name('password.change');
Route::post('/password/update', [HomeController::class, 'updatePassword'])->name('password.update');
Route::get('/logout', [HomeController::class, 'Logout']);

//admin section Auth
Route::get('admin/home', 'App\Http\Controllers\AdminController@index');
Route::get('admin', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'App\Http\Controllers\Admin\LoginController@login');

// Password Reset Routes...
Route::get('admin/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('admin-password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('admin/reset/password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('admin/update/reset', [ResetPasswordController::class, 'reset'])->name('admin.reset.update');
Route::get('/admin/Change/Password', [AdminController::class, 'ChangePassword'])->name('admin.password.change');
Route::post('/admin/password/update', [AdminController::class, 'Update_pass'])->name('admin.password.update');
Route::get('admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');

// Route::get('/admin', 'App\Http\Controllers\backEnd\Admin\AdminLoginController@index');
// Route::post('/admin.login', 'App\Http\Controllers\backEnd\Admin\DashboardController@index');
// Route::get('/admin-dashboard', 'App\Http\Controllers\backEnd\Admin\DashboardController@index');



//admin section route
Route::get('/work-station-setting', 'App\Http\Controllers\backEnd\Admin\WorkStationController@index');
Route::get('/package-setting', 'App\Http\Controllers\backEnd\Admin\PackageRateController@index');
Route::get('/wallet-setting', 'App\Http\Controllers\backEnd\Admin\WalletSettingController@index');
Route::get('/contact-inbox', 'App\Http\Controllers\backEnd\Admin\MailController@contact_inbox');
Route::get('/contact-sent', 'App\Http\Controllers\backEnd\Admin\MailController@contact_sent');
Route::get('/site-setting', 'App\Http\Controllers\backEnd\Admin\SiteSettingController@index');
Route::get('/admin-role-setting', 'App\Http\Controllers\backEnd\Admin\UserRoleController@index');
Route::get('/new-users', 'App\Http\Controllers\backEnd\Admin\UserListController@new_users');
Route::get('/pending-users', 'App\Http\Controllers\backEnd\Admin\UserListController@pending_users');
Route::get('/active-users', 'App\Http\Controllers\backEnd\Admin\UserListController@active_users');

//frontend
Route::get('/', function () { return view('frontend/index');});
Route::get('/login-panel', function () { return view('frontend/login');});
Route::get('/registration', function () { return view('frontend/registration');});

//user section route
Route::get('/user-wallet', 'App\Http\Controllers\backEnd\User\DashboardController@index');
Route::get('/user-profile', 'App\Http\Controllers\backEnd\User\UserProfileController@index');
Route::get('/user-buy-package', 'App\Http\Controllers\backEnd\User\UserPackageController@index');
Route::get('/user-add-member', 'App\Http\Controllers\backEnd\User\AddMembersController@index');
Route::get('/user-work-station', 'App\Http\Controllers\backEnd\User\WorkStationController@index');

