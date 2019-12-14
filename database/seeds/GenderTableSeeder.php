<?php

use Illuminate\Database\Seeder;
use App\Gender;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = ['Male','Female','Other'];
        foreach ($genders as $key => $value) {
        	Gender::firstOrCreate(['name'=>$value]);
        }
    }
}
