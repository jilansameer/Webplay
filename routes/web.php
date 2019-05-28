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


Auth::routes();
Route::middleware('guest')->group(function(){
	Route::view('/', 'welcome');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/');
});


Route::get('/pricing', function () {
    return view('layouts/pricing');
});
Route::get('/about', function () {
    return view('layouts/about');
});
Route::get('/contact', function () {
    return view('layouts/contact');
});

Route::get('/profile', function () {
    return view('layouts/profile');
});

//
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rooms', 'RoomController@create')->name('createClass');
Route::post('/rooms', 'RoomController@store')->name('saveClass');
Route::get('/allroom', 'RoomController@showall');
Route::get('/rooms/{id}', 'RoomController@show');


Route::get('/child', 'ChildrenController@create')->name('createChild');
Route::post('/child', 'ChildrenController@store')->name('saveChild');
Route::get('/child/{id}', 'ChildrenController@show');
Route::get('/child/edit/{id}', 'ChildrenController@editview');
Route::post('/child/edit/{id}', 'ChildrenController@update');



Route::get('/webmap','WebmapController@index');
Route::get('/webmap/{id}','WebmapController@show');

Route::get('/webmap/edit/{id}','WebmapController@create');
Route::get('/webmap/save/{id}','WebmapController@store');

Route::get('/webmap/rooms/{id}','WebmapController@showroom');


Route::get('/observe/edit/{id}','ObservationController@create');
Route::get('/observe/{id}','ObservationController@show');
Route::post('/observe/{id}','ObservationController@store')->name('saveObserve');
