<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('createad', function(){
    return view('ad/create');
});

Route::get('editad/{id}',function($id){
    return view('ad/edit');
});

Route::get('createuser', function(){
    return view('user/create');
});

Route::get('edituser/{id}',function($id){
    return view('user/edit');
});

Route::get('/', function () {
    return view('welcome');
});
*/

Route::auth();

Route::group(['middleware' => 'auth', 'prefix' => 's_admin'], function () {
    Route::get('/', 'HomeController@login');
    
    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
    
    Route::resource('property-types', 'PropertyTypeController');
    Route::resource('properties', 'PropertyController');
    //Route::resource('listing-types', 'ListingTypeController');
    Route::resource('listings', 'ListingController');
});

Route::get('/', 'HomeController@index');