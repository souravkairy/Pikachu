<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ResetPasswordController;

Auth::routes(['verify' => true]);

//user section Auth-------------
Route::get('/password/change', 'App\Http\Controllers\HomeController@changePassword')->name('password.change');
Route::post('/password/update', 'App\Http\Controllers\HomeController@updatePassword')->name('password.updated');
Route::get('/logout', 'App\Http\Controllers\HomeController@Logout');

//admin section Auth-------------
Route::get('admin/home', 'App\Http\Controllers\AdminController@index');
Route::get('admin', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'App\Http\Controllers\Admin\LoginController@login');
Route::get('admin/logout','App\Http\Controllers\AdminController@logout')->name('admin.logout');

//Admin user role
Route::get('admin/User-role/create', 'App\Http\Controllers\backend\Admin\UserRoleController@UserCreate')->name('user-role');
Route::post('admin/User-role/Store', 'App\Http\Controllers\backend\Admin\UserRoleController@UserStore')->name('store-admin');
Route::get('delete/admin/{id}', 'App\Http\Controllers\backend\Admin\UserRoleController@UserDelete');
// Route::get('edit/admin/{id}', [ReportController::class, 'UserEdit']);
// Route::post('admin/update/admin', [ReportController::class, 'UserUpdate'])->name('update-admin');

//Admin Password Reset Routes----
// Route::get('admin/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('admin.password.request');
// Route::post('admin-password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('admin.password.email');
// Route::get('admin/reset/password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('admin.password.reset');
// Route::post('admin/update/reset', [ResetPasswordController::class, 'reset'])->name('admin.reset.update');
// Route::get('/admin/Change/Password', 'App\Http\Controllers\AdminController@ChangePassword')->name('admin.password.change');
// Route::post('/admin/password/update', 'App\Http\Controllers\AdminController@Update_pass')->name('admin.password.update');


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
Route::post('/save-site-setting', 'App\Http\Controllers\backEnd\Admin\SiteSettingController@save_site_setting');
Route::get('/admin-role-setting', 'App\Http\Controllers\backEnd\Admin\UserRoleController@index');


Route::get('/new-users', 'App\Http\Controllers\backEnd\Admin\UserListController@new_users');
Route::get('/active-users', 'App\Http\Controllers\backEnd\Admin\UserListController@active_users');
Route::get('/viewActiveUser/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@view_active_users');
Route::get('/deleteActiveUser/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@delete_active_users');
Route::get('/de-actived-users', 'App\Http\Controllers\backEnd\Admin\UserListController@de_activated_users');
Route::get('/pending-packages', 'App\Http\Controllers\backEnd\Admin\UserListController@pending_packages');
Route::get('/viewSS/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@viewSS');
Route::get('/activeUser/{user_id}/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@activeUser');
Route::get('/declineUser/{id}', 'App\Http\Controllers\backEnd\Admin\UserListController@declineUser');
Route::get('/active-packages', 'App\Http\Controllers\backEnd\Admin\UserListController@active_packages');
Route::get('/de-actived-packages', 'App\Http\Controllers\backEnd\Admin\UserListController@de_active_packages');

//withdraw request list route --------------------------------
Route::get('/pending-withdraw-list', 'App\Http\Controllers\backEnd\Admin\WithdrawController@pending_withdraw');
Route::get('/view-withdraw/{id}', 'App\Http\Controllers\backEnd\Admin\WithdrawController@view_withdraw');
Route::get('/view-completed-withdraw/{id}', 'App\Http\Controllers\backEnd\Admin\WithdrawController@view_completed_withdraw');
Route::post('/confirm-withdraw', 'App\Http\Controllers\backEnd\Admin\WithdrawController@confirm_withdraw');
Route::get('/completed-withdraw-list', 'App\Http\Controllers\backEnd\Admin\WithdrawController@completed_withdraw');
Route::get('/completed-', 'App\Http\Controllers\backEnd\Admin\WithdrawController@completed_withdraw');

//generate trading bonous route --------------------------------
Route::get('/generate-traiding-bonous', 'App\Http\Controllers\backEnd\Admin\CommisionsSettingController@generate_trading_bonous');
Route::post('/update-traiding-bonous', 'App\Http\Controllers\backEnd\Admin\CommisionsSettingController@update_trading_bonous');


//user section route------------------------------------------//////////
///////////////////////////
Route::get('/user-wallet', 'App\Http\Controllers\backEnd\User\DashboardController@index')->middleware('verified');
Route::post('/update-wallet-address', 'App\Http\Controllers\backEnd\User\DashboardController@update_wallet_address');
Route::get('/user-profile', 'App\Http\Controllers\backEnd\User\UserProfileController@index')->middleware('verified');

//downline member route
Route::get('/downline-members', 'App\Http\Controllers\backEnd\User\DashboardController@downline_memebers')->middleware('verified');

//withdraw request route
Route::post('/withdraw_request', 'App\Http\Controllers\backEnd\User\WithdrawController@withdraw_request');
Route::post('/withdra', 'App\Http\Controllers\backEnd\User\WithdrawController@withdraw_request');

//package section --------------
Route::get('/packages', 'App\Http\Controllers\backEnd\User\UserPackageController@index');
Route::post('/package-buying-process', 'App\Http\Controllers\backEnd\User\UserPackageController@package_buying_process');
Route::post('/package-buying-processtwo', 'App\Http\Controllers\backEnd\User\UserPackageController@package_buying_processtwo');
Route::post('/process-completed', 'App\Http\Controllers\backEnd\User\UserPackageController@process_completed');





//user work station controller -
Route::get('/user-add-member', 'App\Http\Controllers\backEnd\User\AddMembersController@index')->middleware('verified');
Route::get('/user-work-station', 'App\Http\Controllers\backEnd\User\WorkStationController@index');
Route::get('/update-work-status', 'App\Http\Controllers\backEnd\User\WorkStationController@update_work_status');






//frontend
Route::get('/', function () { return view('frontend/index');});
Route::post('/contact-message','App\Http\Controllers\frontEnd\FrontEndController@contact_message');
Route::get('/login-panel', function () { return view('frontend/login');})->name('login-panel');
Route::get('/registration', 'App\Http\Controllers\frontEnd\FrontEndController@registration');
Route::get('/registration/{slug}','App\Http\Controllers\frontEnd\FrontEndController@registrationbyref');
