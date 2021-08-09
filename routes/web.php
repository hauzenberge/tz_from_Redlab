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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', 'HomeController@index');

Route::prefix('/staff')->group(function () {
        Route::any('/edit/{id}', 'StaffController@edit');
        Route::any('/update/{id}', 'StaffController@update');

        Route::any('/add', 'StaffController@add');
        Route::any('/store', 'StaffController@store');
        
        Route::any('/delete/{id}', 'StaffController@destroy');
});

Route::prefix('/departament')->group(function () {
        Route::any('/edit/{id}', 'DepartamentController@edit');
        Route::any('/update/{id}', 'DepartamentController@update');

        Route::any('/add', 'DepartamentController@add');
        Route::any('/store', 'DepartamentController@store');
        
        Route::any('/delete/{id}', 'DepartamentController@destroy');
});