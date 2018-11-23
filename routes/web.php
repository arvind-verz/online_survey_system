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


Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/loginpanel', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

    Route::get('/home', 'AdminAuth\DashboardController@index');

    Route::get('/access-not-allowed', 'AdminAuth\Account\PermissionController@access_not_allowed');
    /* ROLES AND PERMISSION */
    Route::get('/roles-and-permission', 'AdminAuth\Account\PermissionController@index');
    Route::get('/roles-and-permission/edit/{id}', 'AdminAuth\Account\PermissionController@edit');
    Route::post('/roles-and-permission/update/{id}', 'AdminAuth\Account\PermissionController@update');

    /* PROFILE */
    Route::get('/profile', 'AdminAuth\Account\ProfileController@index')->name('profile');
    Route::post('/profile/update-user-details', 'AdminAuth\Account\ProfileController@update_user_details');
    Route::post('/profile/update-user-password', 'AdminAuth\Account\ProfileController@update_user_password');

    /* CMS */
    Route::get('/cms/pages', 'AdminAuth\CMS\PagesController@index');
    Route::get('/cms/pages/create', 'AdminAuth\CMS\PagesController@create');
    Route::post('/cms/pages/store', 'AdminAuth\CMS\PagesController@store');
    Route::get('/cms/pages/edit/{id}', 'AdminAuth\CMS\PagesController@edit');
    Route::post('/cms/pages/update/{id}', 'AdminAuth\CMS\PagesController@update');

    /* DEPARTMENT */
    Route::get('/{department}/users', 'AdminAuth\DepartmentController@users');
    Route::get('/{department}/users/create', 'AdminAuth\DepartmentController@create_users');
    Route::post('/{department}/users/store', 'AdminAuth\DepartmentController@store_users');
    Route::get('/{department}/users/edit/{id}', 'AdminAuth\DepartmentController@edit_users');
    Route::post('/{department}/users/update/{id}', 'AdminAuth\DepartmentController@update_users');

    Route::get('/{department}/customers', 'AdminAuth\DepartmentController@customers');
    Route::get('/{department}/customers/create', 'AdminAuth\DepartmentController@create_customers');
    Route::post('/{department}/customers/store', 'AdminAuth\DepartmentController@store_customers');
    Route::get('/{department}/customers/edit/{id}', 'AdminAuth\DepartmentController@edit_customers');
    Route::post('/{department}/customers/update/{id}', 'AdminAuth\DepartmentController@update_customers');

    Route::get('/{department}/survey', 'AdminAuth\DepartmentController@survey');
    Route::get('/{department}/survey/view/{survey_id}', 'AdminAuth\DepartmentController@survey_show');
    Route::post('/{department}/survey/update-survey/{survey_id}', 'AdminAuth\DepartmentController@update_survey');
    Route::get('/{department}/survey/delete-survey/{survey_id}', 'AdminAuth\DepartmentController@delete_survey');
});


Route::get('/{survey_id}/{slug}', 'Auth\CMSController@index');
Route::post('/{survey_id}/{slug}/store', 'Auth\CMSController@store');