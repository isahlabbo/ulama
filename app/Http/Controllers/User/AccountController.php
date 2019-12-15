<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\UserBaseController;

class AccountController extends UserBaseController
{
    public function upgradeIndex()
    {
    	return view('users.account.upgrade.create');
    }

    public function upgradeRegister(Request $request)
    {
    	$profile = $this->createProfile($request->all());
    	$profile->addMedia($request->image)->toMediaCollection('image');
        user()->userRoles()->firstOrCreate(['role_id'=>2]);
        session()->flash('message','Account upgraded successfully');
        return redirect()->route('home',[user()->name()]);
    }

    public function createProfile($data)
    {
    	return user()->profile()->create([
    		'gender_id'=>$data['gender'],
    		'state_id'=>$data['state'],
    		'lga_id'=>$data['lga'],
    		'about'=>$data['about'],
    		'home_address'=>$data['home_address'],
    		'alternative_address'=>$data['alternative_address'],
    	]);
    }
}
