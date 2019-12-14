<?php

namespace App;


class AudioDownload extends BaseModel
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
