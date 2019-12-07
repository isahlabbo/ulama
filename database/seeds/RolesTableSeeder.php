<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =['Admin','Preacher','User'];
        foreach ($roles as $key => $value) {
        	Role::firstOrCreate(['name'=>$value]);
        }
    }
}
