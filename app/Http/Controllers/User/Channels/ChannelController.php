<?php

namespace App\Http\Controllers\User\Channels;

use App\User;
use App\Channel;
use App\UserChannel;
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

    public function subscribe($channelID)
    {
        $channel = UserChannel::find($channelID);
        if(user()->hasSubscription($channel)){
            user()->unSubscribe($channel);
            $message = 'The are successfully un subsccribe from '.$channel->title.' there for you will not recieve any update notification again';
        }else{
            user()->subscribe($channel);
            $message = 'The subscription to '.$channel->title.'  was successfull there we will send you an update notification';
        }
        
        session()->flash('message',$message);
        return back();
    }

    public function channels($userID)
    {
        return view('users.channels.view',['user'=>User::find($userID)]);
    }
}
