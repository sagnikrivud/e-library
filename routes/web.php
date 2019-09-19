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
    return view('welcome');
});
Route::get('/about','Controller@about')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/back','Controller@back')->name('back');
Route::get('/profile','ProfileController@profile')->name('profile');
Route::get('/book','BookController@book')->name('book');
Route::post('/update/{id}','ProfileController@update')->name('update');
Route::get('/book','BookController@book')->name('book');
Route::get('/mybook','BookController@mybook')->name('mybook');
Route::get('/action','AjaxController@action')->name('action');
//Route::get('/printPDF','BookController@printPDF')->name('printPDF');
Route::post('/booksubmit','BookController@booksubmit')->name('booksubmit');
Route::post('/check', 'AjaxController@check')->name('check');
Route::post('/mymail','HomeController@mymail')->name('mymail');
Route::get('/manual','HomeController@manual')->name('manual');
//Route::post('/authenticated','Auth\LoginController@authenticated');
Route::post('/authenticate','Auth\LoginController@authenticate');
//Route::get('booksubmit','IssueController@booksubmit')->name('booksubmit');
//----------------------Admin Routes-----------------------------------//
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/dashboard','Auth\LoginController@dashboard')->name('dashboard');
Route::get('/issuemonitor','AdminController@issuemonitor')->name('issuemonitor');
Route::get('/booklist','AdminController@booklist')->name('booklist');
Route::get('/addbook','AdminController@addbook')->name('addbook');
Route::post('/add','AdminController@add')->name('add');
Route::post('/issueupdate/{id}','AdminController@issueupdate')->name('issueupdate');
Route::get('/statusupdate/{id}','AdminController@statusupdate')->name('statusupdate');
Route::get('/main','AdminController@main')->name('main');
Route::get('/member','AdminController@member')->name('member');
Route::get('/addcopy/{id}','AdminController@addcopy')->name('addcopy');
Route::post('updatecopy/{id}','AdminController@updatecopy')->name('updatecopy');
Route::post('/contctcheck','AjaxController@contctcheck')->name('contctcheck');
//Route::get('/test','TestController@test')->name('test');
//Route::post('/issueupdate','TestController@issueupdate')->name('issueupdate');
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

//Route::post('/book/search', 'BookController@search')->name('book.search');