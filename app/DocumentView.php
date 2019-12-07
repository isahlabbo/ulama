<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentView extends Model
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
