<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
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
