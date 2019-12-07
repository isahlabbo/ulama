<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public function userChannels($value='')
    {
    	return $this->hasMany(UserChannel::class);
    }

    public function subscription()
    {
    	return $this->belongsTo(Subscription::class);
    }
}
