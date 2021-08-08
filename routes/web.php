<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ResetPasswordController;

Auth::routes(['verify' => true]);

//user section Auth-------------
Route::get('/password/change', 'App\Http\Controllers\HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'App\Http\Controllers\HomeController@updatePassword')->name('password.update');
Route::get('/logout', 'App\Http\Controllers\HomeController@Logout');

//admin section Auth-------------
Route::get('admin/home', 'App\Http\Controllers\AdminController@index');
Route::get('admin', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'App\Http\Controllers\Admin\LoginController@login');

//Admin Password Reset Routes----
Route::get('admin/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
Route::post('admin-password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
Route::get('admin/reset/password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
Route::post('admin/update/reset', [ResetPasswordController::class, 'reset'])->name('admin.reset.update');
Route::get('/admin/Change/Password', 'App\Http\Controllers\AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update', 'App\Http\Controllers\AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');

//admin section route

//work station setting -------------
Route::get('/work-station-setting', 'App\Http\Controllers\backEnd\Admin\WorkStationController@index');
Route::post('/update-task', 'App\Http\Controllers\backEnd\Admin\WorkStationController@update_task');

//package setting ------------------
Route::get('/package-setting', 'App\Http\Controllers\backEnd\Admin\PackageRateController@index');
Route::post('/save-package', 'App\Http\Controllers\backEnd\Admin\PackageRateController@save_package');
Route::get('/delete-package/{id}', 'App\Http\Controllers\backEnd\Admin\PackageRateController@delete_package');

//wallet setting -------------------
Route::get('/wallet-setting', 'App\Http\Controllers\backEnd\Admin\WalletSettingController@index');
Route::post('/update-wallet', 'App\Http\Controllers\backEnd\Admin\WalletSettingController@update_wallet');

//mail setting ---------------------
Route::get('/contact-inbox', 'App\Http\Controllers\backEnd\Admin\MailController@contact_inbox');
Route::get('/view-message/{id}', 'App\Http\Controllers\backEnd\Admin\MailController@view_message');
Route::get('/contact-sent', 'App\Http\Controllers\backEnd\Admin\MailController@contact_sent');

//commisions setting ---------------
Route::get('/commisions-setting', 'App\Http\Controllers\backEnd\Admin\CommisionsSettingController@index');
Route::post('/update-commisions', 'App\Http\Controllers\backEnd\Admin\CommisionsSettingController@update_commisions');


Route::get('/site-setting', 'App\Http\Controllers\backEnd\Admin\SiteSettingController@index');
Route::get('/admin-role-setting', 'App\Http\Controllers\backEnd\Admin\UserRoleController@index');


Route::get('/new-users', 'App\Http\Controllers\backEnd\Admin\UserListController@new_users');
Route::get('/pending-users', 'App\Http\Controllers\backEnd\Admin\UserListController@pending_users');
Route::get('/viewSS/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@viewSS');
Route::get('/activeUser/{user_id}/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@activeUser');
Route::get('/active-users', 'App\Http\Controllers\backEnd\Admin\UserListController@active_users');


//user section route------------------------------------------
Route::get('/user-wallet', 'App\Http\Controllers\backEnd\User\DashboardController@index');
Route::post('/update-wallet-address', 'App\Http\Controllers\backEnd\User\DashboardController@update_wallet_address');
Route::get('/user-profile', 'App\Http\Controllers\backEnd\User\UserProfileController@index');

//downline member route
Route::get('/downline-members', 'App\Http\Controllers\backEnd\User\DashboardController@downline_memebers');

//withdraw request route
Route::post('/withdraw_request', 'App\Http\Controllers\backEnd\User\WithdrawController@withdraw_request');

//package section --------------
Route::get('/packages', 'App\Http\Controllers\backEnd\User\UserPackageController@index');
Route::post('/package-buying-process', 'App\Http\Controllers\backEnd\User\UserPackageController@package_buying_process');
Route::post('/process-completed', 'App\Http\Controllers\backEnd\User\UserPackageController@process_completed');





//user work station controller -
Route::get('/user-add-member', 'App\Http\Controllers\backEnd\User\AddMembersController@index');
Route::get('/user-work-station', 'App\Http\Controllers\backEnd\User\WorkStationController@index');
Route::get('/update-work-status', 'App\Http\Controllers\backEnd\User\WorkStationController@update_work_status');






//frontend
Route::get('/', function () { return view('frontend/index');});
Route::post('/contact-message','App\Http\Controllers\frontEnd\FrontEndController@contact_message');
Route::get('/login-panel', function () { return view('frontend/login');});
Route::get('/registration', 'App\Http\Controllers\frontEnd\FrontEndController@registration');
Route::get('/registration/{slug}','App\Http\Controllers\frontEnd\FrontEndController@registrationbyref');
