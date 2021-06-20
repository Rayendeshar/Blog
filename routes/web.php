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

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/madam', function () {
    return view('backend.index');
});

// for blog
Route::get('/blog/create','Blog\BlogController@create');
Route::post('/blog/store/','Blog\BlogController@store');
Route::get('/blog/index','Blog\BlogController@index');
Route::get('blog/{id}/edit','Blog\BlogController@edit');
Route::post('blog/{id}','Blog\BlogController@update');

//for company
Route::get('/company/create','Blog\CompanyController@create');
Route::get('/company/index','Blog\CompanyController@index');
Route::post('/company/store/','Blog\CompanyController@store');
Route::get('/company/{id}/edit','Blog\CompanyController@edit');
Route::post('/company/{id}','Blog\CompanyController@update');


// for about
Route::get('/about/create','Blog\AboutController@create');
Route::get('/about/index','Blog\AboutController@index');
Route::post('/about/store/','Blog\AboutController@store');
Route::get('about/{id}/edit','Blog\AboutController@edit');
Route::post('about/{id}','Blog\Aboutcontroller@update');

