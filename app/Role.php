<?php

namespace App;

class Role extends BaseModel
{
    public function userRoles()
    {
    	return $this->hasMany(UserRole::class);
    }
}
