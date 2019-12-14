<?php

namespace App;

class UserRole extends BaseModel
{
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function role()
    {
    	return $this->belongsTo(Role::class);
    }
}
