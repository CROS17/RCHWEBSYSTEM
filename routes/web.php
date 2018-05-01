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

Route::get('/blog', 'Web\PageController@blog')->name('blog');


//web
    Route::get('blog', 'Web\PageController@blog')->name('blog');
    Route::get('blog/{slug}', 'Web\PageController@post')->name('post');
    Route::get('category/{slug}', 'Web\PageController@category')->name('category');
    Route::get('tag/{slug}', 'Web\PageController@tag')->name('tag');
    Route::get('user', 'Web\PageController@user')->name('user');

//clientes
    //Route::get('tipocliente/{slug}', 'Web\PageController@tipoclient')->name('tipoclient');
    //Route::get('cliente/{slug}', 'Web\PageController@cliente')->name('cliente');


//admin
    Route::resource('tags', 'Admin\TagController');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('posts', 'Admin\PostController');
    Route::resource('users', 'Admin\UserController');

    //Route::resource('tipoclients', 'Admin\TipoCLientController');
    //Route::resource('clientes', 'Admin\ClienteController');


//prueba
Route::get('/reporte', function() {
        return view('admin.reports.barra');
    });    

//prueba
Route::get('/prueba', function() {
        return view('admin.prueba');
    });   

Route::get('/home', 'HomeController@index')->name('home');