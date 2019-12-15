<?php

namespace App;

class BookView extends BaseModel
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function book()
    {
    	return $this->belongsTo(Book::class);
    }
}
