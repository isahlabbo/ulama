<?php

namespace App;

class Channel extends BaseModel
{
    public function userChannels()
    {
    	return $this->hasMany(UserChannel::class);
    }

    public function subscription()
    {
    	return $this->belongsTo(Subscription::class);
    }
}
