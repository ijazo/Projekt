<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\County::create ([
            'county_name' => 'Grad Zagreb'
            
        ]);
    }
}
