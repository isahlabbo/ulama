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

    public function documents()
    {
    	return $this->hasMany(Document::class);
    }


}
