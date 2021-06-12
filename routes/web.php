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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PageController@home')->name('home');
Route::get('/cases', 'PageController@cases')->name('cases');
Route::get('/advantages', 'PageController@advantages')->name('advantages');
Route::get('/reviews', 'PageController@reviews')->name('reviews');
Route::get('/clients', 'PageController@clients')->name('clients');
Route::match(['get', 'post'],'/form-request', 'PageController@formRequest')->name('form_request');

// Admin Routes
Route::match(['post', 'get'], 'admin', 'Admin\AuthController@login')->name('admin.login');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {

    // Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    // Profile
    Route::match(['get', 'post'],'profile/edit', 'Admin\ProfileController@edit')->name('admin.profile.edit');
    Route::get('logout', 'Admin\ProfileController@logout')->name('admin.logout');

    Route::get('users', 'Admin\UsersController@list')->name('admin.users.list');
    Route::match(['post', 'get'],'users/create', 'Admin\UsersController@create')->name('admin.users.create');
    Route::match(['post', 'get'],'users/{id}/edit', 'Admin\UsersController@edit')->name('admin.users.edit');
    Route::get('users/{id}/delete', 'Admin\UsersController@delete')->name('admin.users.delete');

    // Cases
    Route::get('cases', 'Admin\CasesController@list')->name('admin.cases.list');
    Route::match(['post', 'get'],'cases/create', 'Admin\CasesController@create')->name('admin.cases.create');
    Route::match(['post', 'get'],'cases/{id}/edit', 'Admin\CasesController@edit')->name('admin.cases.edit');
    Route::get('cases/{id}/delete', 'Admin\CasesController@delete')->name('admin.cases.delete');

    // Clients
    Route::get('clients', 'Admin\ClientsController@list')->name('admin.clients.list');
    Route::match(['post', 'get'],'clients/create', 'Admin\ClientsController@create')->name('admin.clients.create');
    Route::match(['post', 'get'],'clients/{id}/edit', 'Admin\ClientsController@edit')->name('admin.clients.edit');
    Route::get('clients/{id}/delete', 'Admin\ClientsController@delete')->name('admin.clients.delete');

    // Bloggers
    Route::get('bloggers', 'Admin\BloggersController@list')->name('admin.bloggers.list');
    Route::match(['post', 'get'],'bloggers/create', 'Admin\BloggersController@create')->name('admin.bloggers.create');
    Route::match(['post', 'get'],'bloggers/{id}/edit', 'Admin\BloggersController@edit')->name('admin.bloggers.edit');
    Route::get('bloggers/{id}/delete', 'Admin\BloggersController@delete')->name('admin.bloggers.delete');

    // Reviews
    Route::get('reviews', 'Admin\ReviewsController@list')->name('admin.reviews.list');
    Route::match(['post', 'get'],'reviews/create', 'Admin\ReviewsController@create')->name('admin.reviews.create');
    Route::match(['post', 'get'],'reviews/{id}/edit', 'Admin\ReviewsController@edit')->name('admin.reviews.edit');
    Route::get('reviews/{id}/delete', 'Admin\ReviewsController@delete')->name('admin.reviews.delete');

    // Orders
    Route::get('orders', 'Admin\OrdersController@list')->name('admin.orders.list');
    Route::match(['post', 'get'],'orders/{id}/edit', 'Admin\OrdersController@edit')->name('admin.orders.edit');
    Route::get('orders/{id}/delete', 'Admin\OrdersController@delete')->name('admin.orders.delete');
});
