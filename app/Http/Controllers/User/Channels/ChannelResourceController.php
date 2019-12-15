<?php

namespace App\Http\Controllers\User\Channels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelResourceController extends Controller
{
    public function newVideo(Request $request)
    {
    	$channel = Channel::find($request->channel);
    	$channel->ChannelVideos()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$channel->addMedia('videos');
    	session()->flash('message','Channel video added successfully');
    	return back();
    }

    public function newBook(Request $request)
    {
    	$channel = Channel::find($request->channel);
    	$channel->ChannelBooks()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$channel->addMedia('videos');
    	session()->flash('message','Channel video added successfully');
    	return back();
    }

    public function newAudio(Request $request)
    {
    	$channel = Channel::find($request->channel);
    	$channel->ChannelAudios()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$channel->addMedia('videos');
    	session()->flash('message','Channel video added successfully');
    	return back();
    }
}
