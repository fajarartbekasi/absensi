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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
Route group master data
*/
Route::group(['prefix'=>'master-data'], function(){
    route::get('siswa','SiswaController@index')->name('master-data.siswa');
});

Route::get('login/github', 'GithubController@redirectToProvider');
Route::get('login/github/callback', 'GithubController@handleProviderCallback');

/**
 * route group untuk master user
 * siswa,admin,guru
 */
Route::group(['prefix' => 'manage'], function(){
    route::get('/user','Manage\UserController@index')->name('manage.user');
    route::get('/add/form/invite','Manage\UserController@create')->name('manage.add.form.invite');
});
