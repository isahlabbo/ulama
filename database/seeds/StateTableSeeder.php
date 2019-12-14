<?php

use Illuminate\Database\Seeder;
use App\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = ['Kebbi','Sokoto','Zamfara','Other'];
        foreach ($states as $key => $value) {
        	State::firstOrCreate(['name'=>$value]);
        }
    }
}
