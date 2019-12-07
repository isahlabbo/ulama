<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AudioView extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function audio()
    {
    	return $this->belongsTo(Audio::class);
    }
}
