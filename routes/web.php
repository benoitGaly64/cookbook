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
    return view('index');
});

Route::group(['prefix' => 'recipies', 'middleware' => 'auth'], function() {  
    Route::get('/', 'RecipiesController@index')
        ->name('recipiesIndex');
    Route::get('/{recipie}/show', 'RecipiesController@show')
        ->name('recipieShow');

    Route::get('/create', 'RecipiesController@create')
        ->name('recipiesCreate');
    Route::post('/store', 'RecipiesController@store')
        ->name('recipiesStore');

    Route::get('/{recipie}/edit', 'RecipiesController@edit')
        ->name('recipieEdit');
    Route::match(['put', 'patch'], '/{recipie}', 'RecipiesController@update')
        ->name('recipieUpdate');
    
});

Route::group(['prefix' => 'categories'], function() {  
    Route::get('/', 'CategoriesController@index')
        ->name('categoriesIndex');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
