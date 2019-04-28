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

Route::get('/', 'WelcomeController@index')->name('welcome');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/presentation', function () {
    return view('presentation');
});

Route::get('/presentation', function () {
    return view('presentation');
});

Route::get('/cgu', function () {
    return view('cgu');
});

Auth::routes(['verify' => true]);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//  Profile Routes
Route::resource('profile', 'ProfileController')->middleware('auth');

//  Dashboard Routes
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');

//  Declarations Route
Route::resource('declarations', 'DeclarationsController')->middleware('auth');

//  Events Route
Route::resource('Events', 'EventsController')->middleware('auth');

//  Posts Route
Route::resource('posts', 'PostsController')->middleware('auth');

//  Contact Route
Route::post('/contact', 'ContactController@store');
