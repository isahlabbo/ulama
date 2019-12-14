<?php

namespace App;


class Plan extends BaseModel
{
    public function channels()
    {
    	return $this->hasMany(Channel::class);
    }
}
