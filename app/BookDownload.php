<?php

namespace App;


class BookDownload extends BaseModel
{
    public function users()
    {
    	return $this->belongsTo(User::class);
    }

    public function book()
    {
    	return $this->belongsTo(Book::class);
    }
}
