<?php

use Illuminate\Database\Seeder;

class DriverLicencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\DriverLicence::create ([
            'date_of_issue' => '2015-05-16',
            'expiration_date' =>'2025-05-16',
            'county_id' => 1,
            'driver_id' => 1
        ]);
    }
}
