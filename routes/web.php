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

Route::get('/', function () {
    return redirect('/tender');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('home',function () {
    return redirect('tender');
});

Route::get('news' , function () {
    return view('blog');
});

Route::resource('tender','TenderController');

Route::post('suggestion', [
    'as' => 'suggestion', 'uses' => 'TenderController@storeSuggestion'
]);