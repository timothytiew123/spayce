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

//Front Pages Controller
Route::get('/', 'PagesController@index');
Route::get('/drivers','PagesController@drivers');
Route::get('/partnerships','PagesController@partnerships');
Route::get('/contact','PagesController@contact');
Route::get('/signup','PagesController@signup');

//Opening Resources
Route::get('/openings/search','OpeningsController@search');
Route::resource('/openings','OpeningsController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('/logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
