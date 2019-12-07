<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideoView extends Model
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
