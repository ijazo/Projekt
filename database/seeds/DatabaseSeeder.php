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
        $this->call(CountiesTableSeeder::class);
        $this->call(MunicipalitiesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(DriversTableSeeder::class);
        $this->call(DriverLicencesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CategoryDriverLicenceTableSeeder::class);
        
    }
}
