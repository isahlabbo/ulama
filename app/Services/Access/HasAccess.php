<?php
namespace App\Services\Access;

trait HasAccess

{
	public function admin()
	{
		$flag = false;
		foreach ($this->userRoles as $userRole) {
			if($userRole->role_id == 1){
				$flag = true;
			}
		}
		return $flag;
	}

	public function preacher()
	{
		$flag = false;
		foreach ($this->userRoles as $userRole) {
			if($userRole->role_id == 2){
				$flag = true;
			}
		}
		return $flag;
	}
}