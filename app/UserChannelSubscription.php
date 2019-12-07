<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserChannelSubscription extends Model
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
