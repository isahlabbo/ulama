<?php

namespace App\Http\Controllers\User\Channels\Resources;

use App\UserChannel;
use Illuminate\Http\Request;
use App\Http\Controllers\UserBaseController;

class VideoController extends UserBaseController
{
    public function register(Request $request)
    {
    	
    	$userChannel = UserChannel::find($request->channel);
    	$video = $userChannel->videos()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$video->addMedia($request->video)->toMediaCollection('videos');

    	session()->flash('message','Channel video added successfully');
    	return back();
    }

    public function index($channelID)
    {
    	return view('users.channels.resources.author.video.index',['userChannel'=>UserChannel::find($channelID)]);
    }
}
