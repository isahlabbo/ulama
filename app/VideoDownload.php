<?php

namespace App;

class VideoDownload extends BaseModel
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
