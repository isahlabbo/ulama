<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

    public function videoDownloads()
    {
    	return $this->hasMany(VideoDownload::class);
    }

    public function videoViews()
    {
    	return $this->hasMany(VideoView::class);
    }
}
