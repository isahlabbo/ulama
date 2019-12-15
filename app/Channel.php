<?php

namespace App;

class Channel extends BaseModel
{
    public function userChannels()
    {
    	return $this->hasMany(UserChannel::class);
    }
}
