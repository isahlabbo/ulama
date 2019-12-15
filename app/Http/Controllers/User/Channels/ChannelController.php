<?php

namespace App\Http\Controllers\User\Channels;

use App\Channel;
use Illuminate\Http\Request;
use App\Http\Controllers\UserBaseController;

class ChannelController extends UserBaseController
{
    public function newChannel(Request $request)
    {
        $channel = Channel::firstOrCreate([
        	'title'=>$request->title,
        	'description'=>$request->description,
        ]);
        $channel->userChannels()->firstOrCreate([
        	'user_id'=>user()->id,
        	'plan_id'=>$request->plan,
        ]);
        session()->flash('message','Channel registered successfully');
        return redirect()->route('user.channel.index');
    }

    public function index()
    {
    	return view('users.channels.index');
    }
}
