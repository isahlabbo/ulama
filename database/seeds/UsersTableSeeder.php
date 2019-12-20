<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 3 ; $i++) { 
        	$user = [
        		'first_name'=> 'isah',
        		'last_name'=> 'labbo',
        		'email'=> 'isahlabbo'.$i.'@ulama.com',
        		'password'=> Hash::make('123456'),
                'phone'=> '0'.rand(7,9).rand(0,1).rand(00000000,99999999)
            ];
            $currentUser = User::create($user);
            $currentUser->userRoles()->firstOrCreate(['role_id'=>$i]);
        }
        
    }
}
