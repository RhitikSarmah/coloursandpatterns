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

Route::get('/','HomeController@index')->name('index');
Route::get('/designs','DesignsController@designs')->name('view.designs');
Route::get('/cp-isha/dashboard','DashboardController@dashboard')->name('dashboard');
Route::get('/cp-isha/dashboard/add-designs','DashboardController@addDesigns')->name('add.designs');
Route::post('/submit/designs','DesignsController@submitDesign')->name('submit.design');
Route::get('/cp-isha/dashboard/designs','DashboardController@adminDesigns')->name('admin.designs');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/designs/delete/{id}','DashboardController@delDesign')->name('delete.design');
