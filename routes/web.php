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

Route::get('/index','controller\goods@index');
Route::post('/goods/add','controller\goods@add');
Route::get('/goods/list','controller\goods@list');
Route::get('/goods/del/{id}','controller\goods@del');
Route::get('/goods/upd/{id}','controller\goods@upd');
Route::any('/goods/update/{id}','controller\goods@update');



Route::get('/user','controller\user@user');
Route::post('/user/add','controller\user@add');
Route::get('/user/list','controller\user@list');