<?php

namespace App;

class DocumentView extends BaseModel
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function document()
    {
    	return $this->belongsTo(Document::class);
    }
}
