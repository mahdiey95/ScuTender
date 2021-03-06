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
use Illuminate\Support\Facades\Auth;


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//====== web views routes ======

Route::get('/', function () {
    return redirect('/tender');
});

Route::get('home',function () {
    return redirect('tender');
})->name('home');

Route::get('news' , function () {
    return redirect('/tender');
    //return view('blog');
})->name('news');

Route::get('contact' , function () {
    return view('contact');
})->name('contact');

//==============================

//========= tenders ===========

Route::resource('tender','TenderController');

Route::post('search', [
    'as' => 'tender.search', 'uses' => 'TenderController@searchTenders'
]);
// ============================

//========= suggestions ============

Route::post('suggestion', [
    'as' => 'suggestion', 'uses' => 'SuggestionController@storeSuggestion'
]);

Route::get('accept/{id}', [
    'as' => 'suggestion.accept', 'uses' => 'SuggestionController@acceptSuggestion'
]);

//=================================



//========== contractors ==========

Route::get('contractors','ContractorController@index')->name('contractor.index');

Route::get('contractor/{name}', [
    'as' => 'contractor.show', 'uses' => 'ContractorController@showContractor'
]);

Route::get('contractors/help' , function () {
    return view('contractor_help');
})->name('contractor.help');

//==============================



//======= admin ==========

Route::get('create_admin', [
    'as' => 'admin.create', 'uses' => 'AdminController@createAdmin'
]);

Route::post('store_admin', [
    'as' => 'admin.store', 'uses' => 'AdminController@storeAdmin'
]);

Route::get('admin/help' , function () {
    return view('admin_help');
})->name('admin.help');


//TODO add users managing table for admin

//=========================


Route::get('download/{category}/{directoryId}/{filename}' , function($category,$directory,$filename) {
    if($category == 'suggestions' && Auth::user()->role == 'CONTRACTOR')
        return abort(403);
    return Storage::download($category.'/'.$directory.'/'.$filename);
})->name('donwload')->middleware('auth');

