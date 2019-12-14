<?php

namespace App;

class UserChannelSubscription extends BaseModel
{
	
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

}
