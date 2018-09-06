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

    /* PROFILE */
    Route::get('/profile', 'AdminAuth\Account\ProfileController@index')->name('profile');

    /* CMS */
    Route::get('/cms/pages', 'AdminAuth\CMS\PagesController@index');
    Route::get('/cms/pages/create', 'AdminAuth\CMS\PagesController@create');

    Route::get('/cms/settings/logo', 'AdminAuth\CMS\SettingsController@logo');
    Route::get('/cms/settings/header', 'AdminAuth\CMS\SettingsController@header');

    /* SALES */
    Route::get('/{department}/users', 'AdminAuth\DepartmentController@users');
    Route::get('/{department}/users/create', 'AdminAuth\DepartmentController@create_users');
    Route::get('/{department}/users/edit', 'AdminAuth\DepartmentController@edit_users');
    Route::post('/{department}/users/store', 'AdminAuth\UserController@store_users');

    Route::get('/{department}/customers', 'AdminAuth\DepartmentController@customers');
    Route::get('/{department}/customers/create', 'AdminAuth\DepartmentController@create_customers');
    Route::get('/{department}/customers/edit', 'AdminAuth\DepartmentController@edit_customers');

    Route::get('/{department}/survey', 'AdminAuth\DepartmentController@survey');
    Route::get('/{department}/survey/view', 'AdminAuth\DepartmentController@view_survey');
});
