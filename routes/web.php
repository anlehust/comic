<?php

use Illuminate\Support\Facades\Route;

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

Route::get('database', function(){
    Schema::create('list_comic',function($table){
        $table -> string('author',100);
    });
});
Route::get('comics','ComicController@content') ;
Route::get('comics/{name}','ChapController@content');
Route::get('comics/{name_of_comic}/chaps/{name_of_chap}','ImageController@content');

Route::get('signup','SignUpController@create');
Route::post('signup','SignUpController@store');

Route::get('login','LoginController@insert');
Route::post('login','LoginController@check');