<?php

use App\Models\Teacher;
use App\Models\Admission;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

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
    return view('auth.login');
});
Route::get('/dash','dashController@index');

Route::post('/login','authController@connection');
Route::get('/Logout','authController@logout');
//route:product
Route::get('/products','productsController@index');
Route::post('/products/add','productsController@add');
Route::get('/products/show/{id}','productsController@show');
Route::delete('/products/delete','productsController@delete');
Route::get('/products/update/{id}','productsController@updateform');
Route::post('/products/update','productsController@update');
Route::get('/products/export','productsController@excel');



//route:category
Route::get('/categories','categoriesController@index');
Route::post('/categories/add','categoriesController@add');
Route::delete('/categories/delete','categoriesController@delete');
Route::get('/categories/update/{id}','categoriesController@updateform');
Route::post('/categories/update','categoriesController@update');

//route:orders
Route::get('/orders','ordersController@index');








