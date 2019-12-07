<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentDownload extends Model
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
