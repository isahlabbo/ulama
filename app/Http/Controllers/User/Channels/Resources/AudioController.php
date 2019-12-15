<?php

namespace App\Http\Controllers\User\Channels\Resources;

use App\UserChannel;
use Illuminate\Http\Request;
use App\Http\Controllers\UserBaseController;


class AudioController extends UserBaseController
{
    public function register(Request $request)
    {

    	$userChannel = UserChannel::find($request->channel);
    	$audio = $userChannel->audios()->firstOrCreate(['title'=>$request->title,'description'=>$request->description]);
    	$audio->addMedia($request->audio)->toMediaCollection('audios');
    	session()->flash('message','Channel video added successfully');
    	return back();
    }
}
