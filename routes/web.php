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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/adminpanel', function () {
    return view('backend/layouts/main');
});

Auth::routes(['register'=>false]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WebsiteController@index')->name('website.index');

Route::resource('/adminpanel/personalcontact', 'PersonalContactController');

Route::resource('/adminpanel/image', 'ImageController');


Route::resource('/adminpanel/users','UserController' );
