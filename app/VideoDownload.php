<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoDownload extends Model
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
