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

/*Route::get('/', function () {
    return view('welcome');
});

/**
 * Display All Tasks
 */
Route::get('/', function () {
  
    return view('tasks', [
        'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);

});


/**
 * Add A New Task
 */
Route::post('/task', function (Request $request) {
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    Task::findOrFail($id)->delete();

    return redirect('/');
});

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

Route::get('/user','UserController@index');

// Rotas para solicitar trocar de senha...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Rotas para trocar a senha...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');