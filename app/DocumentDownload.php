<?php

namespace App;


class DocumentDownload extends BaseModel
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function document()
    {
    	return $this->belongsTo(Document::class);
    }
}
