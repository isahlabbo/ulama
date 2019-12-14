<?php

namespace App;

class UserChannel extends BaseModel
{
    public function user()
    {
    	return $this->belongsTo(User::class);
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
