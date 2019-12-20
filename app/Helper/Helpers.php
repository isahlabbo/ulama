<?php
use App\UserChannel;

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