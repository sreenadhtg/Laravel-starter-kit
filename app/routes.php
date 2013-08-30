<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function(){
    if(Auth::check()) {
        return Redirect::to('/home');
    } else {
        return View::make('user.login');
    }
    
});

Route::post ('/', 'UserController@doLogin');

Route::group(array('before' => 'auth'), function()
{
    
    Route::get('home','HomeController@showWelcome');
    Route::get('user/{id}', 'UserController@showProfile');
    
    
    Route::get('users', array('before' => 'authcheck',function() {
        $users = User::all();
        return View::make('user.list')->with('users', $users);
    }));
    
    Route::get ('/logout', function(){
        Auth::logout();
        return Redirect::to('/');
    });
    
});


//Filters
Route::filter('auth', function()
{
    if (!Auth::check()) {
       return Redirect::to('/');
    }
    
});

