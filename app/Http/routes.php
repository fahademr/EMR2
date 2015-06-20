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


Entrust::routeNeedsRole('super*', 'super', Redirect::back());
Entrust::routeNeedsRole('admin*', 'admin', Redirect::back());
Entrust::routeNeedsRole('doctor*', 'doctor', Redirect::back());
Entrust::routeNeedsRole('receptionist*', 'receptionist', Redirect::back());
Entrust::routeNeedsRole('accountant*', 'accountant', Redirect::back());
Entrust::routeNeedsRole('lab*', 'lab', Redirect::back());

// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'super'], function(){
    get('/dashboard', function(){
        return view('super.dashboard');
    });
});

Route::group(['prefix' => 'admin'], function(){
    get('/dashboard', function(){
        return view('admin.dashboard');
    });
});

Route::group(['prefix' => 'receptionist'], function(){
    get('/dashboard', function(){
        return view('receptionist.dashboard');
    });
});

Route::group(['prefix' => 'doctor'], function(){
    get('/dashboard', function(){
        return view('doctor.dashboard');
    });
});

Route::group(['prefix' => 'accountant'], function(){
    get('/dashboard', function(){
        return view('accountant.dashboard');
    });
});

Route::group(['prefix' => 'lab'], function(){
    get('/dashboard', function(){
        return view('lab.dashboard');
    });
});