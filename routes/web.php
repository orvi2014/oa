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

Route::get('/', 'PageController@getHome');
Route::get('/about', 'PageController@getAbout');
Route::get('/contact', 'PageController@getContact');
Route::get('/work', 'PageController@getWork');
Route::get('sendbasicemail','MailController@basic_email');
Route::post('sendhtmlemail','MailController@html_email');
//Route::get('sendhtmlemail', function()
//{
//return View::make('resources/views/mail.blade.php');
//});
Route::get('sendattachmentemail','MailController@attachment_email');
