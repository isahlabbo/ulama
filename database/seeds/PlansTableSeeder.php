<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = ['Free','Monthly','Quartly','Half Yearly','Yearly'];
        foreach ($plans as $key => $value) {
        	Plan::firstOrCreate(['name'=>$value]);
        }
    }
}
