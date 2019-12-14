<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PlansTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(LgaTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(GenderTableSeeder::class);
    }
}
