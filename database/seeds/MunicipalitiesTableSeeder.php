<?php

use Illuminate\Database\Seeder;

class MunicipalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Municipality::create ([
            'municipality_name' => 'Grad Zagreb',
            'county_id' => 1
        ]);
    }
}
