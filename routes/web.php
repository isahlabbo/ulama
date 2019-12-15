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
    return view('welcome');
});

Auth::routes();

Route::get('/{user}', 'HomeController@index')->name('home');
Route::prefix('user')
   ->namespace('User')
   ->name('user.')
   ->group(function() {
	    //account routes	
	    Route::prefix('accounts')
	        ->name('account.')
	        ->group(function() {
		    Route::post('upgrade/register', 'AccountController@upgradeRegister')->name('upgrade.register');
		});
	    //channels routes
	    Route::prefix('channels')
	        ->namespace('Channels')
	        ->name('channel.')
	        ->group(function() {
		    Route::get('/', 'ChannelController@index')->name('index');
		    Route::post('/register', 'ChannelController@newChannel')->name('register');
            //channel resource route
		    Route::prefix('resources')
		        ->name('resource.')
		        ->group(function() {
			    Route::post('/video/register', 'ChannelResourceController@newVideo')->name('video.register');
			    Route::post('/book/register', 'ChannelResourceController@newBook')->name('book.register');
			    Route::post('/audio/register', 'ChannelResourceController@newAudio')->name('audio.register');
			});
		});
    });
