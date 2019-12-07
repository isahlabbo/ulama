<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function channels()
    {
    	return $this->hasMany(Channel::class);
    }
}
