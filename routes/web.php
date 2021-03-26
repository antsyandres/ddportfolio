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
})->name('home');

Route::get('/member', 'MemberController@index')->name('member.index');
Route::get('/memberedit/{id}','MemberController@edit')->name('member.edit');
Route::post('/member/update/','MemberController@update')->name('member.update');

Auth::routes();

//default 
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//account DELETE
Route::get('/dashboard/delete/{id}','DashboardController@destroy')->name('dashboard.destroy');

//showcase CRUD
Route::get('/showcase/{id}', 'ShowcaseController@index')->name('showcase.index');
Route::post('/showcase/store/','ShowcaseController@store')->name('showcase.store');
Route::get('/showcase/delete/{id}','ShowcaseController@destroy')->name('showcase.destroy');
Route::get('/showcase/edit/{id}','ShowcaseController@edit')->name('showcase.edit');
Route::post('/showcase/update/','ShowcaseController@update')->name('showcase.update');

//showcase section
Route::get('/showcase', 'ShowcaseController@show')->name('showcase.show');



