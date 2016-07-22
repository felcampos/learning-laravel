<?php

use App\Events\UserHasRegistered;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('broadcast', function () {
	$name = Request::input('name');
    event(new UserHasRegistered($name));

});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/teste', function () {
    session()->flash('status', 'Flash Session funcionou');

    return redirect('/adm');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/adm', 'AdminController@index');
