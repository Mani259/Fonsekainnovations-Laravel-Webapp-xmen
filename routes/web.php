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

Auth::routes();

Route::post('/home', 'HomeController@update_avatar'); //route to upload civilian image
Route::post('/home', 'HomeController@update_mutant'); //route to upload mutant imgae
//Route::post('profile', 'HomeController@profile');
Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
  Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]); //route for admin to acess user managmen page

});
