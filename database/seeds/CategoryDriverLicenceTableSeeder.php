<?php

use Illuminate\Database\Seeder;

class CategoryDriverLicenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CategoryDriverLicence::create ([
            'date_of_pass' => '2015-05-10',
            'driver_licence_id' => 1,
            'category_id' => 1
        ]);
    }
}
