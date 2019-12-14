<?php

use Illuminate\Database\Seeder;
use App\Lga;

class LgaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lgas = [
        	['name'=>'Bagudo','state_id'=>1],
        	['name'=>'Birnin Kebbi','state_id'=>1],
        	['name'=>'Mayyama','state_id'=>1],

        	['name'=>'Tambuwal','state_id'=>2],
        	['name'=>'Wamakko','state_id'=>2],
        	['name'=>'Tangaza','state_id'=>2],

        	['name'=>'Zamfara','state_id'=>3],
        	['name'=>'Mafara','state_id'=>3],
        	['name'=>'Bungudu','state_id'=>3],

        ];
        foreach ($lgas as $lga) {
        	Lga::firstOrCreate($lga);
        }
    }
}
