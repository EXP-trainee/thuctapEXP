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

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');

Route::get('nhanvien', 'NhanvienController@showNhanVien')->name('showNhanVien');
Route::get('createnhanvien','NhanvienController@createNhanVien')->name('createNhanVien');
Route::post('createnhanvien','NhanvienController@postNhanVien')->name('postNhanVien');
Route::get('editnhanvien/{id}','NhanvienController@editNhanVien')->name('editNhanVien');
Route::post('updatenhanvien/{id}','NhanvienController@updateNhanVien')->name('updateNhanVien');
Route::get('deleteNhanvien/{id}','NhanvienController@deleteNhanvien')->name('deleteNhanVien');

Route::resource('users', 'UserController');