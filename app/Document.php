<?php

namespace App;


class Document extends BaseModel
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
