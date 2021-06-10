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
    return view('welcome');
});


// Admin Routes
Route::match(['post', 'get'], 'admin', 'Admin\AuthController@login')->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {

    // Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    // Profile
    Route::match(['get', 'post'],'profile/edit', 'Admin\ProfileController@edit')->name('admin.profile.edit');
    Route::get('logout', 'Admin\ProfileController@logout')->name('admin.logout');
});
