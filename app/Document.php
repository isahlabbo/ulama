<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

    public function documentDownloads()
    {
    	return $this->hasMany(DocumentDownload::class);
    }

    public function documentViews()
    {
    	return $this->hasMany(DocumentView::class);
    }
}
