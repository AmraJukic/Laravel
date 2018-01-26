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


// ovo u browseru pozivamo : http://127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
});



// ovo u browseru pozivamo : http://127.0.0.1:8000/about1
Route::get('about1', function () {
    return view('about1');
});


/*
// ovo u browseru pozivamo : http://127.0.0.1:8000/aa
Route::get('aa', 'PagesController@about');
*/


// ovo u browseru pozivamo : http://127.0.0.1:8000/about
Route::get('about', 'PagesController@about');


Route::get('contact', 'PagesController@contact');