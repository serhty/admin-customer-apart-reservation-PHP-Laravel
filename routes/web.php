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

Route::get('/panel','App\Http\Controllers\Admin\LoginController@login')->name('admin.login');
Route::post('/panel','App\Http\Controllers\Admin\LoginController@login_check')->name('admin.login_check');
Route::prefix('panel')->name('admin.')->middleware('adminMiddleware')->group(function(){
    Route::get('/home','App\Http\Controllers\Admin\HomeController@index')->name('home');
    Route::resource('customers','App\Http\Controllers\Admin\CustomersController');
    Route::resource('settings','App\Http\Controllers\Admin\SettingsController');
    Route::resource('sliders','App\Http\Controllers\Admin\SlidersController');
    Route::resource('blogs','App\Http\Controllers\Admin\BlogsController');
    Route::resource('pages','App\Http\Controllers\Admin\PagesController');
    Route::resource('sales','App\Http\Controllers\Admin\SalesController');
    Route::resource('supports','App\Http\Controllers\Admin\SupportsController');
    Route::resource('contacts','App\Http\Controllers\Admin\ContactsController');
    Route::resource('notes','App\Http\Controllers\Admin\NotesController');
    Route::resource('aparts','App\Http\Controllers\Admin\CustomerApartsController');
    Route::get('/logout','App\Http\Controllers\Admin\LoginController@logout')->name('logout');
    Route::get('/rooms/{id}','App\Http\Controllers\Admin\CustomerRoomsController@rooms')->name('rooms');
    Route::resource('rooms','App\Http\Controllers\Admin\CustomerRoomsController');
    Route::get('/reservations/{id}','App\Http\Controllers\Admin\CustomerReservationsController@reservations')->name('reservations');
    Route::resource('reservations','App\Http\Controllers\Admin\CustomerReservationsController');
});

Route::get('/myapart','App\Http\Controllers\Apart\LoginController@login')->name('apart.login');
Route::post('/myapart','App\Http\Controllers\Apart\LoginController@login_check')->name('apart.login_check');
Route::prefix('myapart')->name('apart.')->middleware('apartMiddleware')->group(function(){
    Route::get('/home','App\Http\Controllers\Apart\HomeController@index')->name('home');
    Route::resource('user','App\Http\Controllers\Apart\UserController');
    Route::resource('apart','App\Http\Controllers\Apart\ApartController');
    Route::resource('rooms','App\Http\Controllers\Apart\RoomsController');
    Route::resource('periods','App\Http\Controllers\Apart\PeriodsController');
    Route::resource('reservations','App\Http\Controllers\Apart\ReservationsController');
    Route::post('/reservation-check','App\Http\Controllers\Apart\ReservationsController@check')->name('reservation-check');
    Route::post('/reservation-make','App\Http\Controllers\Apart\ReservationsController@make')->name('reservation-make');
    Route::resource('notes','App\Http\Controllers\Apart\NotesController');
    Route::resource('supports','App\Http\Controllers\Apart\ApartSupportsController');
    Route::get('/logout','App\Http\Controllers\Apart\LoginController@logout')->name('logout');
});

Route::fallback(function () {
    return redirect()->route('home');
});
Route::get('/','App\Http\Controllers\Site\HomeController@index')->name('home');
Route::get('/{link}','App\Http\Controllers\Site\HomeController@apart')->name('apart');
Route::post('/reservation-check','App\Http\Controllers\Site\HomeController@reservation_check')->name('reservation_check');
Route::post('/reservation','App\Http\Controllers\Site\HomeController@reservation')->name('reservation');
Route::post('/reservation-request-received','App\Http\Controllers\Site\HomeController@reservation_add')->name('reservation_add');
Route::get('/holiday/aparts','App\Http\Controllers\Site\HomeController@aparts')->name('aparts');
Route::get('/holiday/rooms','App\Http\Controllers\Site\HomeController@rooms')->name('rooms');
Route::post('/holiday/rooms','App\Http\Controllers\Site\HomeController@rooms')->name('rooms');
Route::get('/blog/blog-page','App\Http\Controllers\Site\HomeController@blogs')->name('blogs');
Route::get('/blog-page/{link}','App\Http\Controllers\Site\HomeController@blog_detail')->name('blog_detail');
Route::get('/institutional/contact','App\Http\Controllers\Site\HomeController@contact')->name('contact');
Route::post('/support-add','App\Http\Controllers\Site\HomeController@support_add')->name('support_add');
Route::post('/apart-support-add','App\Http\Controllers\Site\HomeController@apart_support_add')->name('apart_support_add');
Route::get('/institutional/user-agreement','App\Http\Controllers\Site\HomeController@user_agreement')->name('user_agreement');
Route::get('/institutional/cookie-policy','App\Http\Controllers\Site\HomeController@cookie_policy')->name('cookie_policy');
Route::get('/institutional/about','App\Http\Controllers\Site\HomeController@about')->name('about');
Route::post('/apart-add-request','App\Http\Controllers\Site\HomeController@apart_add_request')->name('apart_add_request');
Route::post('/room_price_check','App\Http\Controllers\Site\HomeController@room_price_check')->name('room_price_check');
Route::get('/site/sitemap','App\Http\Controllers\Site\HomeController@sitemap')->name('sitemap');