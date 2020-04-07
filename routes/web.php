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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::resource('posts','PostsController');
// Route::get('/hello', function () {
//     //return view('welcome');
//     return 'Hello World';

// // });
// Route::get('/about',function(){
//    return view('pages.about');
// });
// Route::get('/users/{id}/{name}',function($id,$name){
//     return 'this is user with id'.$id.'and the name is'.$name;
//  });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
