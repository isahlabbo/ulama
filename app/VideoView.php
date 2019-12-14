<?php

namespace App;

class VideoView extends BaseModel
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function video()
    {
    	return $this->belongsTo(Video::class);
    }
}
