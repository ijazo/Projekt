<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Driver::create ([
            'OIB' => 78513469851,
            'first_name' => 'Pero',
            'last_name' => 'Perić',
            'sex' => 'Male',
            'date_of_birth' => '1990-01-25',
            'city_id' => 1
        ]);
    }
}
