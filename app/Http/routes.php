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

Route::get('/', ['as'=>'home','uses'=>'HomeController@landing']);

Route::group(['middleware'=>['guest']],function(){
    Route::get('login',['as'=>'login','uses'=>'HomeController@login']);
    Route::post('login',['as'=>'authenticate','uses'=>'HomeController@authenticate']);
    Route::post('register',['as'=>'register','uses'=>'HomeController@register']);
    //Facebook
    Route::get('redirect', 'SocialAuthController@redirect');
    Route::get('callback', 'SocialAuthController@callback');

});

Route::group(['middleware' => ['auth']],function(){
    Route::get('index',['as'=>'dashboard','uses'=>'HomeController@index']);
    Route::get('logout',['as'=>'logout','uses'=>'HomeController@logout']);
});


