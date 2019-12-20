<?php

namespace App;

class UserChannel extends BaseModel
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function videos()
    {
    	return $this->hasMany(Video::class);
    }

    public function audios()
    {
    	return $this->hasMany(Audio::class);
    }

    public function books()
    {
    	return $this->hasMany(Book::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
    
    public function hasSubscription()
    {
        if(count(user()->subscriptions->where('user_channel_id',$this->id))>0){
            return true;
        }
    }

}
