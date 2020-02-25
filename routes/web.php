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

Route::get('/addcategory', function () {
    return view('category');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('category', 'categoryController@index');
Route::get('message', 'messageController@index');
Route::get('create', 'HomeController@insert_category');
Route::get('insert', 'HomeController@insert_message');

Route::get('/addmessage', function () {
    return view('message');
});

// Route::get('/categoryList', function () {
//     return view('categoryList');
// });

// Route::get('/messageList', function () {
//     return view('messageList');
// });