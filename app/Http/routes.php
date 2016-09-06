<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Task;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */

 /* Route::get('/cadastrar', function() {
        return view('user.registerUser');
   });*/

Route::post('/saveServidor','FunciController@saveServidor');
Route::get('/index','FunciController@registerUser');
Route::get('/getExportCSV','ExportController@getExportCSV');
Route::get('/user','UserController@index');
Route::get('/getExportExcel','ExportController@getExportExcel');


Route::get('/getExportdoc','ExportController@getExportdoc');
Route::get('/getExportPdf','ExportController@getExportPdf');
Route::get('htmltopdfview',array('as'=>'htmltopdfview','uses'=>'ExportController@htmltopdfview'));


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['midleware' => ['web']], function(){

    //
});

Route::group(['midleware' => ['web']], function(){
    Route::auth();

   Route::get('/home','HomeController@index'); 

   Route::get('/', function() {
        return view('welcome');
   });
    
});


// Rotas para solicitar trocar de senha...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Rotas para trocar a senha...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');