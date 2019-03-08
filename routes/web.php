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
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'PageController@getHome');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::get('/work', 'PageController@getWork');
Route::post('/sendEmail', 'PageController@sendEmail');
