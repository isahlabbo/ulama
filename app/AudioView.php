<?php

namespace App;

class AudioView extends BaseModel
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function audio()
    {
    	return $this->belongsTo(Audio::class);
    }
}
