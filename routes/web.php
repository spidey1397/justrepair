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
Route::view('/', 'front');
Route::view('dashboard', 'layouts.admin');
Route::view('get-in-touch', 'contact');
Route::view('who-we-are', 'about');
Route::get('services', 'ServiceController@view');
Route::get('services/{landing}', 'ServiceLandingController@view');
Route::get('services/{landing}/{area}', 'ServiceAreaController@view');
Route::get('newproject','LinkController@pro');
Route::get('newcategory','LinkController@cat');
Route::get('assigncategory','LinkController@assigncat');
Route::get('upload','LinkController@upload');
Route::get('admin','LinkController@home');
Route::get('getdata','LinkController@getdata');

Route::resource('data','DataController');
Route::resource('project','ProjectController');
Route::resource('category','CategoryController');
Route::resource('assign','AssigncatController');
Route::resource('update','UpdatecatController');
Route::resource('upload','UploadController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
