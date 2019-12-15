<?php

namespace App\Http\Controllers\User\Channels\Resources;

use App\Channel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudioController extends Controller
{
    public function register(Request $request)
    {
    	$channel = Channel::find($request->channel);
    	$audio = $channel->audios()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$audio->addMedia('audios');
    	session()->flash('message','Channel video added successfully');
    	return back();
    }
}
