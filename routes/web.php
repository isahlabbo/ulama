<?php
use App\UserChannel;
use App\User;
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
    return view('welcome',['userChannels'=>UserChannel::all()]);
})->middleware('guest');

Route::get('/user/{userID}/channels', function ($userID) {
    return view('channels',['user'=>User::find($userID)]);
})->name('user.channels');

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
		        ->namespace('Resources')
		        ->group(function() {

		        // books resouces routes	
                Route::prefix('books')
		        ->name('book.')
		        ->group(function() {
                    Route::post('/register', 'BookController@register')->name('register');
		        });

                // videos resouces routes	
                Route::prefix('videos')
		        ->name('video.')
		        ->group(function() {
                    Route::post('/register', 'VideoController@register')->name('register');
		        });

		        // audios resouces routes	
                Route::prefix('audios')
		        ->name('audio.')
		        ->group(function() {
                    Route::post('/register', 'AudioController@register')->name('register');
		        });
			});
		});
        Route::prefix('channels/{channelID}/')
	        ->namespace('Channels\Resources')
	        ->name('channel.resources.')
	        ->group(function() {
            Route::get('videos','VideoController@index')->name('videos');
            Route::get('books','BookController@index')->name('books');
            Route::get('audios','AudioController@index')->name('audios');
	    });
    });
