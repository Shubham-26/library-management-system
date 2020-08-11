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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::group(['middleware'=>"web"],function(){
	
Route::get('/','RestroController@index');
Route::get('/list','RestroController@list');
Route::post('/add','RestroController@add');
Route::get('/delete/{id}','RestroController@delete');
Route::get('/edit/{id}','RestroController@edit');
Route::post('edit','RestroController@update');
Route::post('/register','RestroController@register');
Route::post('/login','RestroController@login');
Route::get('/logout','RestroController@logout');

Route::get('/profile/{id}','RestroController@profile');
Route::post('/profile','RestroController@profile');

Route::view('home','home');

Route::view('profile','profile');
Route::view('add','add');
Route::view('register','register');
Route::view('login','login');
});

Route::get('email-test', function(){

  

	$details['email'] = 'ameta0for0u@gmail.com';

  

    dispatch(new App\Jobs\SendEmailJob($details));

  

    dd('done');

});