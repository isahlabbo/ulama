<?php

namespace App\Http\Controllers\User\Channels\Resources;

use App\UserChannel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function register(Request $request)
    {
    	$userChannel = UserChannel::find($request->channel);
    	$video = $userChannel->videos()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$video->addMedia('videos');

    	session()->flash('message','Channel video added successfully');
    	return back();
    }
}
