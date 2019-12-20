<?php

namespace App\Http\Controllers\User\Channels\Resources;

use App\UserChannel;
use Illuminate\Http\Request;
use App\Http\Controllers\UserBaseController;


class BookController extends UserBaseController
{
    public function register(Request $request)
    {

    	$userChannel = UserChannel::find($request->channel);
    	$book = $userChannel->books()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$book->addMedia($request->book)->toMediaCollection('books');

    	session()->flash('message','Channel video added successfully');
    	return back();
    }

    public function index($channelID)
    {
    	return view('users.channels.resources.author.book.index',['userChannel'=>UserChannel::find($channelID)]);
    }
}
