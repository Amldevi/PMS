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
Route::get('/index', 'StaffController@index')->name('index');
Route::post('/project', 'StaffController@project')->name('project');
Route::get('/project', 'StaffController@project')->name('project');

Route::get('/form', 'StaffController@form')->name('form');
// Route::any('/form', 'StaffController@store')->name('project.form');
Route::any('file-upload', 'StaffController@fileUploadPost')->name('file.upload.post');
Route::get('/pswds', 'StaffController@pswds')->name('pswds');
Route::any('/store', 'StaffController@store')->name('store');
Route::get('/datatablereg', 'StaffController@datatablereg')->name('datatablereg');
Route::get('/files/{id}', 'StaffController@show');
Route::get('/get_project', 'StaffController@get_project')->name('get-project');
Route::post('/delete', 'StaffController@delete_modal')->name('delete');
Route::any('/stores/{id?}', 'StaffController@stores')->name('stores');

