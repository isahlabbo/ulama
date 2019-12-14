<?php

namespace App;

class Video extends BaseModel
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
