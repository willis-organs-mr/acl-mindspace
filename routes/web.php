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
    return view('index');
})->name('main');

Auth::routes();

// Route::get('/home', 'HomeController@index');

// ACL Project

Route::get('/author', [
    'uses' => 'AppController@getAuthorPage',
    'as' => 'author',
    // 'middleware' => 'roles',
    // 'roles' => ['Admin', 'Author']
]);

Route::get('/author/generate-article', [
    'uses' => 'AppController@getGenerateArticle',
    'as' => 'author.article',
    // 'middleware' => 'roles',
    // 'roles' => ['Author']
]);

Route::get('/admin', [
    'uses' => 'AppController@getAdminPage',
    'as' => 'admin',
    // 'middleware' => 'roles',
    // 'roles' => ['Admin']
]);

Route::post('/admin/assign-roles', [
    'uses' => 'AppController@postAdminAssignRoles',
    'as' => 'admin.assign',
    // 'middleware' => 'roles',
    // 'roles' => ['Admin']
]);