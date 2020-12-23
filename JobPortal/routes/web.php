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
   
});

Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');

Route::get('/register', 'adminController@register');
Route::post('/register', 'adminController@registerPost');

Route::get('/logout', 'logoutController@index');

Route::group(['middleware'=>['sess']], function(){
 Route::get('/admin', 'adminController@index');
 Route::get('/employee', 'empController@index');
 Route::get('/admin/list', 'adminController@emplist')->name('emp.list');
 Route::get('/details/{id}', 'adminController@show')->name('emp.show');
 Route::get('/edit/{id}', 'adminController@edit')->name('emp.edit');
 Route::post('/edit/{id}', 'adminController@update');
 Route::get('/delete/{id}', 'adminController@delete');
 Route::post('/delete/{id}', 'adminController@destroy');

});
