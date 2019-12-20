<?php

use App\UserChannel;
use App\User;

if (!function_exists('storage_url')) {
    function storage_url($url)
    {
        return blank($url) ? $url: Storage::url($url);
    }
}

if (!function_exists('user')) {
    function user()
    {
    	$user = null;
        if(auth()->check()){
        	$user = auth()->user();
        }
        return $user;
    }
}

if (!function_exists('userChannels')) {
    function userChannels()
    {
        return UserChannel::all();
    }
}

if (!function_exists('preachers')) {
    function preachers()
    {
        $preachers = [];
        foreach (User::all() as $user) {
            if($user->preacher()){
                $preachers[] = $user;
            }
        }
        return $preachers;
    }
}