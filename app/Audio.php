<?php

namespace App;


class Audio extends BaseModel
{
    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

    public function audioDownloads()
    {
    	return $this->hasMany(AudioDownload::class);
    }

    public function audioViews()
    {
    	return $this->hasMany(AudioView::class);
    }
}
