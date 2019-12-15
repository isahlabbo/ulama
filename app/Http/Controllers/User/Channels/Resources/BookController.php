<?php

namespace App\Http\Controllers\User\Channels\Resources;

use App\UserChannel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function register(Request $request)
    {
    	$userChannel = UserChannel::find($request->channel);
    	$book = $userChannel->books()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$book->addMedia('books');

    	session()->flash('message','Channel video added successfully');
    	return back();
    }
}
