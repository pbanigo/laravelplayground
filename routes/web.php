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

Route::get('', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('ccontact', function () {
    return view('contacts.create');
});
Route::get('cproduct', function () {
    return view('product.create');
});

Route::resource('contacts', 'ContactController');
Route::resource('tasks', 'TaskController');
Route::resource('products', 'ProductController');