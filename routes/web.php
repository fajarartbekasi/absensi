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
Route::group(['prefix'=>'master-data', 'middleware' => ['auth']], function(){
    route::get('siswa','SiswaController@index')->name('master-data.siswa');
});

Route::get('login/github', 'GithubController@redirectToProvider');
Route::get('login/github/callback', 'GithubController@handleProviderCallback');

/**
 * route group untuk master user
 * siswa,admin,guru
 */
Route::group(['prefix' => 'manage', 'middleware' => ['auth']], function(){
    route::get('/user','Manage\UserController@index')->name('manage.user');
    route::get('/add/form/invite','Manage\UserController@create')->name('manage.add.form.invite');
    route::get('/add/form/lesson','Manage\LessonController@create')->name('manage.add.form.lesson');
    route::get('/add/form/class','Manage\ClassController@create')->name('manage.add.form.class');
    route::get('/lessons','Manage\LessonController@index')->name('manage.lessons');

    route::get('/class','Manage\ClassController@index')->name('manage.class');
    route::get('students','Manage\StudentController@index')
    ->name('manage.students');
});


Route::group(['prefix' =>'store', 'middleware' => ['auth']], function(){
    route::post('lesson','Manage\LessonController@store')->name('store.lesson');
    route::post('class','Manage\ClassController@store')->name('store.class');
    route::post('user','Manage\UserController@store')->name('store.user');
});

Route::group(['prefix' => 'edit'], function () {
    route::get('lesson/{lesson}', 'Manage\LessonController@edit')->name('edit.lesson');
    route::get('class/{clas}', 'Manage\ClassController@edit')->name('edit.class');
    route::get('user/{user}', 'Manage\UserController@edit')->name('edit.user');
});

Route::group(['prefix' =>'update', 'middleware' => ['auth']], function () {
    route::patch('lesson/{lesson}', 'Manage\LessonController@update')->name('update.lesson');
    route::patch('class/{clas}', 'Manage\ClassController@update')->name('update.class');
    route::patch('user/{user}', 'Manage\UserController@update')
            ->name('update.user');
});

Route::group(['prefix' =>'destroy', 'middleware' => ['auth']], function () {
    route::delete('lesson/{lesson}', 'Manage\LessonController@destroy')->name('destroy.lesson');
    route::delete('class/{clas}', 'Manage\ClassController@destroy')->name('destroy.class');
    Route::delete('user/{user}', 'Manage\UserController@destroy')
    ->name('destroy.user');
});
